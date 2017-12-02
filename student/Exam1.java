import java.util.Scanner;


public class Exam1 {

	
	public static void main(String[] args) {
		System.out.println("«Î ‰»Îa=");
		Scanner scan=new Scanner(System.in);
		int a=scan.nextInt();
		int temp=0;
		int sum=0;
		for(int i=1;i<=a;i++){
			temp=temp*10+a;
			sum+=temp;
		}
		System.out.println(sum);

	}

}
