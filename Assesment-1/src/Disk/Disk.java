package Disk;

import java.util.*;
public class Disk {
    static Scanner input = new Scanner(System.in);
    
    public static void howManyStep(int disk, char menaraAsal, char menaraBantuan ,char menaraTujuan){
        if (disk == 1) {
            System.out.println("Pindahkan Disk " +disk+ " dari Menara " +menaraAsal+ " ke Menara " +menaraTujuan);
            return;
        }
        howManyStep(disk-1, menaraAsal, menaraBantuan, menaraTujuan);
        System.out.println("Pindahkan Disk " +disk+ " dari Menara " +menaraAsal+ " ke Menara " +menaraTujuan);
        howManyStep(disk-1, menaraBantuan, menaraTujuan, menaraAsal);
    }
    
    public static void main(String[] args) {
        System.out.println("Input Jumlah Disk : ");
        int disk = input.nextInt();
        howManyStep(disk, 'A', 'B', 'C');
    }
}
