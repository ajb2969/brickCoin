import java.math.BigInteger;
import java.nio.charset.StandardCharsets;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.util.HashMap;

public class brickChain{
    private HashMap<BigInteger,brickNode> dict;
    public brickChain(){
        dict = new HashMap<BigInteger, brickNode>();
    }

    public int getSize(){
        return this.dict.size();
    }

    public HashMap<BigInteger, brickNode> getDict() {
        return dict;
    }

    private static String bytesToHex(byte[] hash) {
        StringBuffer hexString = new StringBuffer();
        for (int i = 0; i < hash.length; i++) {
            String hex = Integer.toHexString(0xff & hash[i]);
            if(hex.length() == 1) hexString.append('0');
            hexString.append(hex);
        }
        return hexString.toString();
    }


    public String getHash(String originalString){
        MessageDigest digest = null;
        try {
            digest = MessageDigest.getInstance("SHA-256");
        } catch (NoSuchAlgorithmException e) {
            e.printStackTrace();
        }
        byte[] encodedhash = digest.digest(originalString.getBytes(StandardCharsets.UTF_8));
        return bytesToHex(encodedhash);
    }

    public BigInteger addNode(BigInteger lastHash, brickNode newElement){
        if(this.getSize() == 0){
            String h = getHash(newElement.toString());
            final BigInteger b = new BigInteger(String.valueOf(h.hashCode()));
            brickNode put = this.dict.put(b, newElement);
            return b;
        }
        else{
            newElement.setNext(lastHash);
            String h = getHash(newElement.toString());
            final BigInteger b = new BigInteger(String.valueOf(h.hashCode()));
            brickNode put = this.dict.put(b, newElement);
            return b;
        }
    }

    public void printChain(BigInteger last){
        if(this.getDict().get(last) == null){
        }
        else{
            this.getDict().get(last).printData();
            printChain(this.getDict().get(last).getNext());
        }
    }
}
