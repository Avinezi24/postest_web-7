#include <iostream>
#include <conio.h>
#include <string>
using namespace std; 

// struct loker
struct Node
{
	int nomor;
	string nama;
	string barang;
	string nomorHP;
  Node *next = NULL;
};


int main();

Node *Head = NULL;

// Prosedur untuk tampilan judul kodingan


void menu_utama(){
	cout <<  "======================" << endl
	 	<< 	 "     MENU MANAJEMEN   " << endl
	   	<<   "======================" << endl
	 	<<   "[1] Lihat Data 		" << endl;
}



bool isEmpty(Node *head)
{
  if (head == NULL)
  {
    return true;
  }
  return false;
}



int jumlahNode(Node *head)
{
  int jumlah = 0;
  while (head != NULL)
  {
    jumlah++;
    head = head->next;
  }
  return jumlah;
}

void display(Node *head)
{
  system("cls");
  
  if (isEmpty(head)) // Kondisi mengecek linked list kosong
  {
    cout << "Data loker tidak ada "; getch();
    return;
  }
  // Traversal ke node terakhir
  Node *temp = head;
  int i=0;
  while (temp != NULL)
  {
    temp->nomor=i+1;
   cout << "\nNomor Loker 			" << ": "<< temp->nomor
					<< "\nNama        			" << ": "<< temp->nama
					<< "\nNama Barang 			" << ": "<< temp->barang
					<< "\nNomor HP    			" << ": "<< temp->nomorHP<<"\n";
    temp = temp->next;
    i++;
  }
  getch();
  
}

// void addLast(Node **head)
// {
//   system("cls");
//   Node *nodeBaru = newNode();
//   if (isEmpty(*head))
//   {
//     *head = nodeBaru;
//     system("cls");
//     cout << "\nData loker berhasil ditambahkan"; getch();
//   }
//   else
//   {
//     // Proses tranversal ke node terakhir
//     Node *temp = *head;
//     while (temp->next != NULL)
//     {
//       temp = temp->next;
//     }
//     // Menghubungkan node terakhir dengan node baru
//     temp->next = nodeBaru;
//     system("cls");
//     cout << "\nData loker berhasil ditambahkan"; getch();
//   }
// }
void addLast(Node **head,string nama,string titip,string nohp)
{
  system("cls");
  Node *nodeBaru = new Node();
  if (isEmpty(*head))
  {
    nodeBaru->nama = nama;
    nodeBaru->barang = titip;
    nodeBaru->nomorHP = nohp;
    *head = nodeBaru;
    system("cls");
  }
  else
  {
    // Proses tranversal ke node terakhir
    Node *temp = *head;
    nodeBaru->nama = nama;
    nodeBaru->barang = titip;
    nodeBaru->nomorHP = nohp;
    while (temp->next != NULL)
    {
      temp = temp->next;
    }
    // Menghubungkan node terakhir dengan node baru
    temp->next = nodeBaru;
    system("cls");
  }
}

void keluar(){
	system("cls");
	cout << "Anda telah keluar dari program "; getch();
}

int main()
{
    addLast(&Head,"rahman","sepatu","082346818942");
    addLast(&Head,"herni","tas","082346818933");
    addLast(&Head,"nanta","rokok","082346818409");
    addLast(&Head,"hadie","buku","082346818348");
    bool ulang = true;
    while( ulang == true){

        int pilih;
            system("cls");
            menu_utama() ;
            cout<<"\n\nMasukkan Pilihan : ";
            cin >> pilih;
            switch(pilih){
                case 1:
                    display(Head); // kondisi jika user memilih untuk menampilkan data
                    break;
                default:
                    cout << "\ninputan anda salah\n";
            }
    }	
}