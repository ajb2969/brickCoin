import java.math.BigInteger;
import java.sql.*;
import java.util.Properties;

public class BrickCoinServer {
    private static Connection con = null;
    private static long time;
    private final static String user = "root";
    private final static String password = "brickbois";
    private final static String databaseName = "brickDB";
    private final static String query = "select * from transaction WHERE transactionTime >= (NOW() - INTERVAL 65 SECOND );";
    private final static String instanceConnectionName = "brickcoin-193416:us-east1:brickcoindb";

    public BrickCoinServer() throws SQLException {
        String jdbcUrl = String.format(
                "jdbc:mysql://google/"+databaseName+"?socketFactory=com.google.cloud.sql.mysql.SocketFactory&cloudSqlInstance=" + instanceConnectionName);
        Properties p = new Properties();
        p.setProperty("user", user);
        p.setProperty("password", password);
        p.setProperty("useSSL","true");
        con = DriverManager.getConnection(jdbcUrl, p);
        time = java.time.Instant.now().getEpochSecond();
    }

    public static void main(String [] args) throws  SQLException {
        try{
            BrickCoinServer bcs = new BrickCoinServer();
            brickChain chain = new brickChain();
            long last = 0;
            long currTime = java.time.Instant.now().getEpochSecond();
            Statement stmt = con.createStatement();
            ResultSet rs = stmt.executeQuery(query);
            while(true){
                brickNode bn = new brickNode();
                while(currTime - time < 60){
                    currTime = java.time.Instant.now().getEpochSecond();
                }
                rs = stmt.executeQuery(query);
                if (!rs.next() ) {
                    System.out.println("no data - " + new Timestamp(System.currentTimeMillis()));
                }else{
                    while(rs.next()){
                        float price = rs.getFloat("amount");
                        bn.appendData(price);
                    }
                    bn.printData();
                    last = Long.parseLong((chain.addNode(BigInteger.valueOf(last),bn).toString()),10);
                }
                time = java.time.Instant.now().getEpochSecond();
            }
        }
        catch(Exception e){
            System.out.println("You screwed up");
            System.exit(1);
        }
    }
}
