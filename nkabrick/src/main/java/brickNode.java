import java.math.BigInteger;
import java.util.ArrayList;

public class brickNode {
    private ArrayList<Float> data;
    private BigInteger next;
    public brickNode(){
        data = new ArrayList<Float>();
    }

    public void setNext(BigInteger next) {
        this.next = next;
    }

    public void appendData(float num){
        this.data.add(num);
    }

    public BigInteger getNext(){
        return this.next;
    }

    public ArrayList<Float> getData() {
        return data;
    }

    public void printData(){
        for(int i = 0; i<data.size(); i++){
            if(i + 1 == data.size()){
                System.out.println(this.data.get(i));
            }
            else{
                System.out.print(this.data.get(i) + ", ");
            }
        }
    }
}
