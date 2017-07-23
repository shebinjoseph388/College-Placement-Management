#include<iostream.h>
#include<process.h>
#include<fstream.h>
#include<stdlib.h>
#include<string.h>
#include<stdio.h>
#include<conio.h>
#include<ctype.h>
#include<dos.h>

class design
  {
    int i;
    public:
      void out_box();
      void small_box();
      void mdi();
      void new_menu();
      void view_menu();
      void edit_menu();
      void tools_menu();
      void search_menu();
      void about_menu();
      void report_menu();
      void del_rec();
  }D;

class login
  {
    char *usr;

    public:
     friend void check();
  }L;

class book
  {
    public:
    char bname[30],auth[30],edition[30],price[10],quant[10],bid[10];
    void add_book();
    void list_book();
    void edit_book();
    void del_book();
    void search_book();
    void issue_update(char *no, char *xn, char *xa, char *xe, char *xp, char *xq);
    void avail_book();
    void notavail_book();
  }B;

class students
  {
    public:
    char sid[10],sname[30],course[20],mobile[15],email[30];
    void add_stud();
    void list_stud();
    void edit_stud();
    void del_stud();
    void search_stud();
  }S;

class lib_record
  {
    char i_date[12], r_date[12];
    char sno[10], bno[10];
    public:
      void issue();
      void retur();
      void update_issue();
      void view_issue();
      void stud_book();
  }LR;

class validation
  {
    public:
      char ch;
      void ventry(char[], int);
      int null_check(char *);
  }V;

void main()
  {
    clrscr();
    check();
  }

void validation :: ventry(char t[], int code)
  {
    int i = 0;
      if(code == 0)
	{
	  while((t[i]=getch())!='\r' && i<30)

	      if((t[i]>=97 && t[i] <= 122) || (t[i] >= 65 && t[i] <= 90) || t[i] == 32 || t[i] == '_')
		{
		  cout << t[i];
		  i++;
		}
	      else if(t[i]==8 && i>0)
		{
		  textcolor(15);
		  cprintf("%c%c%c",8,32,8);
		  i--;
		}
	}
      else if(code == 1)
	{
	  while((t[i]=getch())!='\r' && i<10)
	    if((t[i]>=48 && t[i] <= 57) || t[i]==46 || t[i] == '/')
	      {
		cout << t[i];
		i++;
	      }
	     else if(t[i]==8 && i>0)
	       {
		 textcolor(15);
		 cprintf("%c%c%c",8,32,8);
		 i--;
	       }
	}
      t[i]='\0';
  }

int validation :: null_check(char *s)
  {
    if(s[0] == NULL)
      return 1;
    else
      return 0;
  }

void design :: out_box()
  {
    textcolor(WHITE);
    gotoxy(2,2);
    cprintf("\xC9");

    for(i=1;i<=74;i++)
      cprintf("\xCD");

   cprintf("\xBB");

   for(i=1;i<47;i++)
     {
       gotoxy(2,i+2);
       cprintf("\xBA");
     }

   gotoxy(2,49);
   cprintf("\xC8");

   for(i=1;i<=74;i++)
     cprintf("\xCD");

   cprintf("\xBC");

   for(i=1;i<47;i++)
     {
       gotoxy(77,i+2);
       cprintf("\xBA");
     }

   gotoxy(2,46);
   cprintf("\xCC");

   for(i=1;i<=74;i++)
      cprintf("\xCD");

   gotoxy(77,46);
   cprintf("\xB9");

   gotoxy(3,48);
   textcolor(MAGENTA);
   cprintf("C++ PROJECT LIBRARY SYSTEM DEVELOPED BY : ");
   textcolor(LIGHTBLUE);
   cprintf("AMIT   PRAVEEN   GAURAV   HITESH");
  }

void design :: small_box()
  {
    textcolor(WHITE);
    gotoxy(12,9);
    cprintf("\xC9");

    for(i=1;i<=54;i++)
      cprintf("\xCD");

    cprintf("\xBB");

    for(i=1;i<27;i++)
      {
	gotoxy(12,i+9);
	cprintf("\xBA");
      }

    gotoxy(12,36);
    cprintf("\xC8");

    for(i=1;i<55;i++)
      cprintf("\xCD");

    cprintf("\xBC");

    for(i=1;i<27;i++)
      {
	gotoxy(67,i+9);
	cprintf("\xBA");
      }

    gotoxy(12,27);
    cprintf("\xCC");

    for(i=1;i<55;i++)
      cprintf("\xCD");

    gotoxy(67,27);
    cprintf("\xB9");

  }

void design :: mdi()
  {
    char op;
    do
    {
    clrscr();
    out_box();
    gotoxy(4,4);
    textcolor(RED+BLINK);
    cprintf("N");
    textcolor(YELLOW);
    cprintf("ew");
    gotoxy(13,4);
    textcolor(RED+BLINK);
    cprintf("E");
    textcolor(YELLOW);
    cprintf("dit");
    gotoxy(22,4);
    textcolor(RED+BLINK);
    cprintf("V");
    textcolor(YELLOW);
    cprintf("iew");
    gotoxy(32,4);
    textcolor(RED+BLINK);
    cprintf("T");
    textcolor(YELLOW);
    cprintf("ools");
    gotoxy(42,4);
    textcolor(RED+BLINK);
    cprintf("S");
    textcolor(YELLOW);
    cprintf("earch");
    gotoxy(52,4);
    textcolor(RED+BLINK);
    cprintf("R");
    textcolor(YELLOW);
    cprintf("eport");
    gotoxy(62,4);
    textcolor(RED+BLINK);
    cprintf("A");
    textcolor(YELLOW);
    cprintf("bout");
    gotoxy(72,4);
    cprintf("E");
    textcolor(RED+BLINK);
    cprintf("X");
    textcolor(YELLOW);
    cprintf("it");
    gotoxy(2,5);
    textcolor(WHITE);
    cprintf("\xCC");
    gotoxy(77,5);
    cprintf("\xB9");
    gotoxy(3,5);
    for(i=0;i<74;i++)
      {
	cprintf("\xCD");
      }
    gotoxy(19,7);
    textcolor(LIGHTGRAY);
    cprintf("Welcome To Library Management System !!!");
    gotoxy(19,8);
    cprintf("------- -- ------- ---------- ------ ---");
    gotoxy(19,20);
    textcolor(CYAN);
    cprintf("Please Enter The Blinking Characters : ");
	op = tolower(getch());
	switch(op)
	 {
	   case 'n' :  new_menu();
	   break;
	   case 'e' :  edit_menu();
	   break;
	   case 'v' :  view_menu();
	   break;
	   case 't' :  tools_menu();
	   break;
	   case 's' :  search_menu();
	   break;
	   case 'r' :  report_menu();
	   break;
	   case 'a' :  about_menu();
	   break;
	   case 'x' : exit(0);
	   break;
	   default : clrscr();
		     D.out_box();
		     textcolor(RED+BLINK);
		     gotoxy(25,31);
		     cprintf("Invalid Choice You Have Selected !!!");
		     getch();
		     textcolor(WHITE);
	 }
    }
    while(op!='x');
  }

void check()
  {
    xx:
    clrscr();
    int i=0;
    char pss[30];
    D.out_box();
    D.small_box();
    textcolor(YELLOW);
    gotoxy(27,4);
    cprintf("WELCOME TO LIBRARY SYSTEM");
    gotoxy(27,5);
    cprintf("-------------------------");
    gotoxy(33,11);
    cprintf("System Login");
    gotoxy(33,12);
    cprintf("------------");
    textcolor(GREEN);
    gotoxy(20,18);
    cprintf("Username : ");
    gotoxy(20,21);
    cprintf("Password : ");
    textcolor(WHITE);
    gotoxy(32,18);
    cin >> L.usr;
    gotoxy(32,21);
    do
      {
	pss[i]=getch();
	if(pss[i]==13 || i==8)
	  {
	    break;
	  }
	else if(pss[i]==8 && i>0)
	  {
	    cprintf("%c%c%c",8,32,8);
	    i--;
	  }
	else
	  {
	    cout << "*";
	    i++;
	  }
      }
    while(pss[i]!=13 || i==8);
    pss[i]='\0';

    if(strcmp(L.usr,"amit") == 0 && strcmp(pss,"ak") == 0)
      {
	clrscr();
	D.mdi();
      }

    else
      {
	textcolor(RED + BLINK);
	gotoxy(25,31);
	cprintf("Invalid Username Or Password !!!");
	getch();
	textcolor(WHITE);
	goto xx;
      }
  }

void design :: new_menu()
  {
    char op;
    do
      {
	clrscr();
	D.out_box();
	gotoxy(33,4);
	textcolor(YELLOW);
	cprintf("Add New Record");
	gotoxy(29,5);
	cprintf("______________________");
	gotoxy(25,11);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'B' ");
	textcolor(GREEN);
	cprintf("To Add New Book");
	gotoxy(25,13);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'S' ");
	textcolor(GREEN);
	cprintf("To Add New Student");
	gotoxy(25,15);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'C' ");
	textcolor(GREEN);
	cprintf("To Go Back To Main Menu");
	gotoxy(23,20);
	textcolor(CYAN);
	cprintf("Please Enter The Blinking Characters : ");
	op = tolower(getch());
	textcolor(WHITE);

	switch(op)
	  {
	    case 'b' : B.add_book();
	    break;
	    case 's' : S.add_stud();
	    break;
	    case 'c' :
	    break;
	    default: clrscr();
		     D.out_box();
		     textcolor(RED+BLINK);
		     gotoxy(25,31);
		     cprintf("Invalid Choice You Have Selected !!!");
		     getch();
		     clrscr();
		     textcolor(WHITE);
	  }
      }
    while(op!='c');
  }

void design :: view_menu()
  {
    char op;
    do
      {
	clrscr();
	D.out_box();
	gotoxy(33,4);
	textcolor(YELLOW);
	cprintf("View All Record");
	gotoxy(29,5);
	cprintf("______________________");
	gotoxy(25,11);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'B' ");
	textcolor(GREEN);
	cprintf("To View All Books");
	gotoxy(25,13);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'S' ");
	textcolor(GREEN);
	cprintf("To View All Students");
	gotoxy(25,15);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'I' ");
	textcolor(GREEN);
	cprintf("To Show Books Issued By Students");
	gotoxy(25,17);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'C' ");
	textcolor(GREEN);
	cprintf("To Go Back To The Main Menu");
	gotoxy(23,23);
	textcolor(CYAN);
	cprintf("Please Enter The Blinking Characters : ");
	op = tolower(getch());
	textcolor(WHITE);

	switch(op)
	  {
	    case 'b' : B.list_book();
	    break;
	    case 's' : S.list_stud();
	    break;
	    case 'i' : LR.view_issue();
	    break;
	    case 'c' :
	    break;
	    default: clrscr();
		     D.out_box();
		     textcolor(RED+BLINK);
		     gotoxy(25,31);
		     cprintf("Invalid Choice You Have Selected !!!");
		     getch();
		     clrscr();
		     textcolor(WHITE);
	  }
      }
    while(op!='c');
  }

void design :: edit_menu()
  {
    char op;
    do
      {
	clrscr();
	D.out_box();
	gotoxy(30,4);
	textcolor(YELLOW);
	cprintf("Edit Existing Record");
	gotoxy(26,5);
	cprintf("___________________________");
	gotoxy(25,11);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'B' ");
	textcolor(GREEN);
	cprintf("To Edit Book Records");
	gotoxy(25,13);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'S' ");
	textcolor(GREEN);
	cprintf("To Edit Student Records");
	gotoxy(25,15);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'D' ");
	textcolor(GREEN);
	cprintf("To Delete Records");
	gotoxy(25,17);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'C' ");
	textcolor(GREEN);
	cprintf("To Go Back To The Main Menu");
	gotoxy(23,23);
	textcolor(CYAN);
	cprintf("Please Enter The Blinking Characters : ");
	op = tolower(getch());
	textcolor(WHITE);

	switch(op)
	  {
	    case 'b' : B.edit_book();
	    break;
	    case 's' : S.edit_stud();
	    break;
	    case 'd' : D.del_rec();
	    break;
	    case 'c' :
	    break;
	    default: clrscr();
		     D.out_box();
		     textcolor(RED+BLINK);
		     gotoxy(25,31);
		     cprintf("Invalid Choice You Have Selected !!!");
		     getch();
		     clrscr();
		     textcolor(WHITE);
	  }
      }
    while(op!='c');
  }

void design :: tools_menu()
  {
    char op;
    do
      {
	clrscr();
	D.out_box();
	gotoxy(30,4);
	textcolor(YELLOW);
	cprintf("Issue Or Return Book");
	gotoxy(29,5);
	cprintf("______________________");
	gotoxy(25,11);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'I' ");
	textcolor(GREEN);
	cprintf("To Issue Books");
	gotoxy(25,13);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'R' ");
	textcolor(GREEN);
	cprintf("To Return Books");
	gotoxy(25,15);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'U' ");
	textcolor(GREEN);
	cprintf("To Renew Books Issued By Students");
	gotoxy(25,17);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'C' ");
	textcolor(GREEN);
	cprintf("To Go Back To The Main Menu");
	gotoxy(23,23);
	textcolor(CYAN);
	cprintf("Please Enter The Blinking Characters : ");
	op = tolower(getch());
	textcolor(WHITE);

	switch(op)
	  {
	    case 'i' : LR.issue();
	    break;
	    case 'r' : LR.retur();
	    break;
	    case 'u' : LR.update_issue();
	    break;
	    case 'c' :
	    break;
	    default: clrscr();
		     D.out_box();
		     textcolor(RED+BLINK);
		     gotoxy(25,31);
		     cprintf("Invalid Choice You Have Selected !!!");
		     getch();
		     clrscr();
		     textcolor(WHITE);
	  }
      }
    while(op!='c');
  }

void design :: search_menu()
  {
    char op;
    do
      {
	clrscr();
	D.out_box();
	gotoxy(33,4);
	textcolor(YELLOW);
	cprintf("Search All Records");
	gotoxy(29,5);
	cprintf("_______________________");
	gotoxy(25,11);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'B' ");
	textcolor(GREEN);
	cprintf("To Search Books");
	gotoxy(25,13);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'S' ");
	textcolor(GREEN);
	cprintf("To Search Students");
	gotoxy(25,15);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'C' ");
	textcolor(GREEN);
	cprintf("To Go Back To The Main Menu");
	gotoxy(23,23);
	textcolor(CYAN);
	cprintf("Please Enter The Blinking Characters : ");
	op = tolower(getch());
	textcolor(WHITE);

	switch(op)
	  {
	    case 'b' :  B.search_book();
	    break;
	    case 's' :  S.search_stud();
	    break;
	    case 'c' :
	    break;
	    default: clrscr();
		     D.out_box();
		     textcolor(RED+BLINK);
		     gotoxy(25,31);
		     cprintf("Invalid Choice You Have Selected !!!");
		     getch();
		     clrscr();
		     textcolor(WHITE);
	  }
      }
    while(op!='c');
  }

void design :: report_menu()
  {
    char op;
    do
      {
	clrscr();
	D.out_box();
	gotoxy(30,4);
	textcolor(YELLOW);
	cprintf("Reports Of Library");
	gotoxy(29,5);
	cprintf("______________________");
	gotoxy(25,11);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'A' ");
	textcolor(GREEN);
	cprintf("To Show Available Books");
	gotoxy(25,13);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'N' ");
	textcolor(GREEN);
	cprintf("To Show Not Available Books");
	gotoxy(25,15);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'S' ");
	textcolor(GREEN);
	cprintf("To Show Students Having Which Books");
	gotoxy(25,17);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'C' ");
	textcolor(GREEN);
	cprintf("To Go Back To The Main Menu");
	gotoxy(23,23);
	textcolor(CYAN);
	cprintf("Please Enter The Blinking Characters : ");
	op = tolower(getch());
	textcolor(WHITE);

	switch(op)
	  {
	    case 'a' : B.avail_book();
	    break;
	    case 'n' : B.notavail_book();
	    break;
	    case 's' : LR.stud_book();
	    break;
	    case 'c' :
	    break;
	    default: clrscr();
		     D.out_box();
		     textcolor(RED+BLINK);
		     gotoxy(25,31);
		     cprintf("Invalid Choice You Have Selected !!!");
		     getch();
		     clrscr();
		     textcolor(WHITE);
	  }
      }
    while(op!='c');
  }

void book :: add_book()
  {
    clrscr();
    D.out_box();
    gotoxy(33,4);
    textcolor(YELLOW);
    cprintf("Add New Book");
    gotoxy(29,5);
    cprintf("____________________");
    gotoxy(4,9);
    textcolor(GREEN);
    cprintf("Book ID   : ");
    gotoxy(4,13);
    cprintf("Book Name : ");
    gotoxy(4,17);
    cprintf("Author    :");
    gotoxy(4,21);
    cprintf("Quantity  : ");
    gotoxy(4,25);
    cprintf("Edition   : ");
    gotoxy(4,29);
    cprintf("Price     : ");
    xx:
    gotoxy(17,9);
    gets(bid);
    if(V.null_check(bid)==1)
      {
	for(int i=0;i<strlen(bid);i++)
	  {
	    textcolor(15);
	    cprintf("%c%c%c",8,32,8);
	  }
	goto xx;
      }
    flushall();
    bb:
    gotoxy(17,13);
    V.ventry(bname,0);
    if(V.null_check(bid)==1)
      {
	for(int i=0;i<strlen(bid);i++)
	  {
	    textcolor(15);
	    cprintf("%c%c%c",8,32,8);
	  }
	goto bb;
      }
    gotoxy(17,17);
    V.ventry(auth,0);
    aa:
    gotoxy(17,21);
    V.ventry(quant,1);
    if(V.null_check(quant)==1)
      {
	for(int i=0;i<strlen(quant);i++)
	  {
	    textcolor(15);
	    cprintf("%c%c%c",8,32,8);
	  }
	goto aa;
      }
    gotoxy(17,25);
    gets(edition);
    gotoxy(17,29);
    V.ventry(price,1);
    gotoxy(17,36);
    textcolor(RED+BLINK);
    cprintf("S");
    textcolor(BLUE);
    cprintf("ave");
    flushall();
    gotoxy(53,36);
    textcolor(RED+BLINK);
    cprintf("C");
    textcolor(BLUE);
    cprintf("ancel");
    char cho = tolower(getch());
    if(cho == 's')
      {
	fstream b_read;
	b_read.open("books.dat",ios::out|ios::app);
	if(b_read==NULL)
	  {
	    cout << "\nCan not open file !!!";
	    getch();
	    exit(0);
	  }
	b_read.write((char *) &B,  sizeof(class book));
	b_read.close();
	flushall();
	clrscr();
	D.out_box();
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("Record Saved Successfully !!!");
	getch();
      }
  }

void students :: add_stud()
  {
    clrscr();
    D.out_box();
    textcolor(YELLOW);
    gotoxy(33,4);
    cprintf("Add New Student");
    gotoxy(29,5);
    cprintf("_______________________");
    gotoxy(4,9);
    textcolor(GREEN);
    cprintf("Roll No   : ");
    gotoxy(4,13);
    cprintf("Name      : ");
    gotoxy(4,17);
    cprintf("Course    : ");
    gotoxy(4,21);
    cprintf("Mobile No : ");
    gotoxy(4,25);
    cprintf("Email Id  : ");
    xx:
    gotoxy(16,9);
    gets(sid);
    if(V.null_check(sid)==1)
      {
	for(int i=0;i<strlen(sid);i++)
	  {
	    textcolor(15);
	    cprintf("%c%c%c",8,32,8);
	  }
	goto xx;
      }
    aa:
    gotoxy(16,13);
    V.ventry(sname,0);
    if(V.null_check(sname)==1)
      {
	for(int i=0;i<strlen(sname);i++)
	  {
	    textcolor(15);
	    cprintf("%c%c%c",8,32,8);
	  }
	goto aa;
      }
    gotoxy(16,17);
    gets(course);
    gotoxy(16,21);
    V.ventry(mobile,1);
    gotoxy(16,25);
    gets(email);
    gotoxy(17,36);
    textcolor(RED+BLINK);
    cprintf("S");
    textcolor(BLUE);
    cprintf("ave");
    flushall();
    gotoxy(53,36);
    textcolor(RED+BLINK);
    cprintf("C");
    textcolor(BLUE);
    cprintf("ancel");
    char cho = tolower(getch());
    if(cho == 's')
      {
	fstream s_read;
	s_read.open("student.dat",ios::out|ios::app);
	if(s_read==NULL)
	  {
	    cout << "\nCan not open file !!!";
	    getch();
	    exit(0);
	  }
	s_read.write((char *) &S, sizeof(class students));
	s_read.close();
	flushall();
	clrscr();
	D.out_box();
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("Record Saved Successfully !!!");
	getch();
      }
  }

void book :: edit_book()
  {
    int found = 0;
    char bn[10];
    clrscr();
    D.out_box();
    textcolor(YELLOW);
    gotoxy(33,4);
    cprintf("Update Book Records");
    gotoxy(29,5);
    cprintf("__________________________");
    gotoxy(4,8);
    textcolor(CYAN);
    cprintf("Enter Book Id : ");
    gets(bn);
    fstream ub;
    ub.open("books.dat",ios::in|ios::out);
    while(ub.read((char *) &B,sizeof(B)) && found == 0)
      {
	if(strcmpi(B.bid,bn)==0)
	  {
	    gotoxy(4,10);
	    textcolor(YELLOW);
	    cprintf("Book No     Name         Author        Edition      Price     Quantity");
	    gotoxy(4,11);
	    textcolor(WHITE);
	    cprintf("----------------------------------------------------------------------");
	    gotoxy(4,13);
	    cout << bid;
	    gotoxy(16,13);
	    cout << bname;
	    gotoxy(29,13);
	    cout << auth;
	    gotoxy(44,13);
	    cout << edition;
	    gotoxy(66,13);
	    cout << quant;
	    gotoxy(57,13);
	    cout << price;
	    gotoxy(4,14);
	    cprintf("----------------------------------------------------------------------");
	    gotoxy(4,16);
	    textcolor(MAGENTA);
	    cprintf("Enter The New Details Of Book :");
	    textcolor(GREEN);
	    gotoxy(4,20);
	    cprintf("Book Id : ");
	    puts(bid);
	    gotoxy(4,24);
	    cprintf("New Book Name     : ");
	    gotoxy(4,28);
	    cprintf("New Book Author   : ");
	    gotoxy(4,32);
	    cprintf("New Book Edition  : ");
	    gotoxy(4,36);
	    cprintf("New Book Quantity : ");
	    gotoxy(4,40);
	    cprintf("New Book Price    : ");
	    aa:
	    gotoxy(25,24);
	    V.ventry(bname,0);
	    if(V.null_check(bname)==1)
	     {
	       for(int i=0;i<strlen(bname);i++)
		{
		  textcolor(15);
		  cprintf("%c%c%c",8,32,8);
		}
	       goto aa;
	     }
	    gotoxy(25,28);
	    V.ventry(auth,0);
	    gotoxy(25,32);
	    gets(edition);
	    xx:
	    gotoxy(25,36);
	    V.ventry(quant,1);
	    if(V.null_check(quant)==1)
	     {
		for(int i=0;i<strlen(quant);i++)
		 {
		   textcolor(15);
		   cprintf("%c%c%c",8,32,8);
		 }
	       goto xx;
	     }
	    gotoxy(25,40);
	    V.ventry(price,1);
	    int pos = -1*sizeof(B);
	    ub.seekp(pos,ios::cur);
	    ub.write((char *) &B, sizeof(B));
	    gotoxy(25,42);
	    textcolor(RED+BLINK);
	    cprintf("Updated Successfully........ !!!");
	    found = 1;
	  }
      }
    ub.close();
    if(found == 0)
      {
	cout << "\nCan not open file !!!";
	getch();
	exit(0);
      }
    getch();
  }

void students :: edit_stud()
  {
    int found = 0;
    char sn[10];
    clrscr();
    D.out_box();
    textcolor(YELLOW);
    gotoxy(33,4);
    cprintf("Update Student Records");
    gotoxy(29,5);
    cprintf("_____________________________");
    gotoxy(4,8);
    textcolor(CYAN);
    cprintf("Enter Student Id : ");
    gets(sn);
    fstream us;
    us.open("student.dat",ios::in|ios::out);
    while(us.read((char *) &S,sizeof(S)) && found == 0)
      {
	if(strcmpi(S.sid,sn)==0)
	  {
	    gotoxy(4,10);
	    textcolor(YELLOW);
	    cprintf("Roll No     Name           Course       Mobile           Email");
	    gotoxy(4,11);
	    textcolor(WHITE);
	    cprintf("----------------------------------------------------------------------");
	    gotoxy(4,13);
	    cout << sid;
	    gotoxy(16,13);
	    cout << sname;
	    gotoxy(31,13);
	    cout << course;
	    gotoxy(42,13);
	    cout << mobile;
	    gotoxy(54,13);
	    cout << email;
	    gotoxy(4,14);
	    cprintf("----------------------------------------------------------------------");
	    gotoxy(4,16);
	    textcolor(MAGENTA);
	    cprintf("Enter The New Details Of Book :");
	    textcolor(GREEN);
	    gotoxy(4,20);
	    cprintf("Student Id : ");
	    puts(sid);
	    gotoxy(4,24);
	    cprintf("New Student Name     : ");
	    gotoxy(4,28);
	    cprintf("New Student Course   : ");
	    gotoxy(4,32);
	    cprintf("New Student Mobile   : ");
	    gotoxy(4,36);
	    cprintf("New Student Email    : ");
	    xx:
	    gotoxy(28,24);
	    V.ventry(sname,0);
	    if(V.null_check(sname)==1)
	     {
		for(int i=0;i<strlen(sname);i++)
		 {
		   textcolor(15);
		   cprintf("%c%c%c",8,32,8);
		 }
	       goto xx;
	     }
	    gotoxy(28,28);
	    V.ventry(course,0);
	    gotoxy(28,32);
	    V.ventry(mobile,1);
	    gotoxy(28,36);
	    gets(email);
	    int pos = -1*sizeof(S);
	    us.seekp(pos,ios::cur);
	    us.write((char *) &S, sizeof(S));
	    gotoxy(25,42);
	    textcolor(RED+BLINK);
	    cprintf("Updated Successfully........ !!!");
	    found = 1;
	  }
      }
    us.close();
    if(found == 0)
      {
	cout << "\nCan not open file !!!";
	getch();
	exit(0);
      }
    getch();
  }

void book :: list_book()
  {
    int x=11;
    clrscr();
    D.out_box();
    textcolor(CYAN);
    gotoxy(33,4);
    cprintf("ALL Books List");
    gotoxy(29,5);
    cprintf("______________________");
    textcolor(LIGHTGRAY);
    gotoxy(4,8);
    cprintf("Book No     Name         Author        Edition      Price     Quantity");
    gotoxy(4,9);
    cprintf("----------------------------------------------------------------------");
    fstream fp;
    fp.open("books.dat",ios::in);
    fp.seekg(0,ios::beg);
    if(fp==NULL)
      {
	cout << "\nCan not open file !!!";
	getch();
	exit(0);
      }
    while(fp.read((char * ) &B, sizeof(B)))
      {
	gotoxy(4,x);
	cout << bid;
	gotoxy(16,x);
	cout << bname;
	gotoxy(29,x);
	cout << auth;
	gotoxy(44,x);
	cout << edition;
	gotoxy(66,x);
	cout << quant;
	gotoxy(57,x);
	cout << price;
	x = x+2;
      }
    fp.close();
    getch();
  }

void design :: del_rec()
  {
    char op;
    do
      {
	clrscr();
	out_box();
	textcolor(CYAN);
	gotoxy(32,4);
	cprintf("Delete Existing Record");
	gotoxy(29,5);
	cprintf("__________________________");
	gotoxy(27,11);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'B' ");
	textcolor(GREEN);
	cprintf("To Delete Books");
	gotoxy(27,13);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'S' ");
	textcolor(GREEN);
	cprintf("To Delete Students");
	gotoxy(27,15);
	textcolor(GREEN);
	cprintf("Press ");
	textcolor(RED+BLINK);
	cprintf("'C' ");
	textcolor(GREEN);
	cprintf("To Go Back To The Main Menu");
	gotoxy(27,22);
	textcolor(CYAN);
	cprintf("Please Enter The Blinking Character : ");
	op= tolower(getch());
	switch(op)
	  {
	    case 'b' :  B.del_book();
	    break;
	    case 's' :  S.del_stud();
	    break;
	    case 'c' :
	    break;
	    default : clrscr();
		      D.out_box();
		      textcolor(RED+BLINK);
		      gotoxy(25,31);
		      cprintf("Invalid Choice You Have Selected !!!");
		      getch();
		      clrscr();
		      textcolor(WHITE);
	  }
      }
    while(op!='c');
  }

void book :: del_book()
  {
    char bn[10];
    int f = 0;
    clrscr();
    D.out_box();
    textcolor(YELLOW);
    gotoxy(33,4);
    cprintf("Delete Book Records");
    gotoxy(29,5);
    cprintf("__________________________");
    gotoxy(4,8);
    textcolor(CYAN);
    cprintf("Enter Book Id : ");
    gets(bn);
    fstream db;
    db.open("books.dat",ios::in|ios::out);
    fstream temp;
    temp.open("temp.dat",ios::out);
    db.seekg(0,ios::beg);
    while(db.read((char *) &B, sizeof(B)))
      {
	if(strcmpi(B.bid,bn)!=0)
	  temp.write((char *) &B, sizeof(B));
	else
	  f=1;
      }
    temp.close();
    db.close();
    flushall();
    remove("books.dat");
    rename("temp.dat","books.dat");
    if(f==1)
      {
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("Record Deleted Successfully !!!");
	getch();
      }
    else
      {
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("No Record Found !!!");
	getch();
      }
  }

void students :: del_stud()
  {
    char sn[10];
    int f = 0;
    clrscr();
    D.out_box();
    textcolor(YELLOW);
    gotoxy(33,4);
    cprintf("Delete Student Records");
    gotoxy(29,5);
    cprintf("__________________________");
    gotoxy(4,8);
    textcolor(CYAN);
    cprintf("Enter Student Id : ");
    gets(sn);
    fstream ds;
    ds.open("student.dat",ios::in|ios::out);
    fstream temp;
    temp.open("temp.dat",ios::out);
    ds.seekg(0,ios::beg);
    while(ds.read((char *) &S, sizeof(S)))
      {
	if(strcmpi(S.sid,sn)!=0)
	  temp.write((char *) &S, sizeof(S));
	else
	  f=1;
      }
    temp.close();
    ds.close();
    flushall();
    remove("student.dat");
    rename("temp.dat","student.dat");
    if(f==1)
      {
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("Record Deleted Successfully !!!");
	getch();
      }
    else
      {
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("No Record Found !!!");
	getch();
      }
  }

void students :: list_stud()
  {
    int x = 11;
    clrscr();
    D.out_box();
    textcolor(CYAN);
    gotoxy(33,4);
    cprintf("ALL Students List");
    gotoxy(29,5);
    cprintf("_________________________");
    textcolor(LIGHTGRAY);
    gotoxy(4,8);
    cprintf("Roll No     Name           Course       Mobile           Email");
    gotoxy(4,9);
    cprintf("----------------------------------------------------------------------");
    fstream fp;
    fp.open("student.dat",ios::in);
    fp.seekg(0,ios::beg);
    if(fp==NULL)
      {
	cout << "\nCan not open file !!!";
	getch();
	exit(0);
      }
    while(fp.read((char * ) &S, sizeof(S)))
      {
	gotoxy(4,x);
	cout << sid;
	gotoxy(16,x);
	cout << sname;
	gotoxy(31,x);
	cout << course;
	gotoxy(42,x);
	cout << mobile;
	gotoxy(54,x);
	cout << email;
	x = x+2;
      }
    fp.close();
    getch();
  }

void book :: search_book()
  {
    int found = 0;
    char bn[10];
    clrscr();
    D.out_box();
    textcolor(YELLOW);
    gotoxy(30,4);
    cprintf("Search All Book Records");
    gotoxy(26,5);
    cprintf("______________________________");
    gotoxy(4,8);
    textcolor(CYAN);
    cprintf("Enter Book Id : ");
    gets(bn);
    fstream sb;
    sb.open("books.dat",ios::in|ios::out);
    while(sb.read((char *) &B,sizeof(B)) && found == 0)
      {
	if(strcmpi(B.bid,bn)==0)
	  {
	    gotoxy(34,10);
	    textcolor(LIGHTGREEN);
	    cprintf("Book Details");
	    gotoxy(30,11);
	    cprintf("___________________");
	    gotoxy(4,14);
	    textcolor(GREEN);
	    cprintf("Book Id   : ");
	    textcolor(WHITE);
	    cprintf(bid);
	    gotoxy(4,18);
	    textcolor(GREEN);
	    cprintf("Book Name : ");
	    textcolor(WHITE);
	    cprintf(bname);
	    gotoxy(4,22);
	    textcolor(GREEN);
	    cprintf("Author    : ");
	    textcolor(WHITE);
	    cprintf(auth);
	    gotoxy(4,26);
	    textcolor(GREEN);
	    cprintf("Edition   : ");
	    textcolor(WHITE);
	    cprintf(edition);
	    gotoxy(4,30);
	    textcolor(GREEN);
	    cprintf("Price     : ");
	    textcolor(WHITE);
	    cprintf(price);
	    gotoxy(4,34);
	    textcolor(GREEN);
	    cprintf("Quantity  : ");
	    textcolor(WHITE);
	    cprintf(quant);
	    found = 1;
	    gotoxy(21,38);
	    textcolor(RED+BLINK);
	    cprintf("Press Any Key To Go Back To Previous Menu");
	  }
      }
    sb.close();
    if(found == 0)
      {
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("No Record Found !!!");
      }
    getch();
  }

void students :: search_stud()
  {
    int found = 0;
    char bs[10];
    clrscr();
    D.out_box();
    textcolor(YELLOW);
    gotoxy(30,4);
    cprintf("Search All Book Records");
    gotoxy(26,5);
    cprintf("______________________________");
    gotoxy(4,8);
    textcolor(CYAN);
    cprintf("Enter Student Id : ");
    gets(bs);
    fstream ss;
    ss.open("student.dat",ios::in|ios::out);
    while(ss.read((char *) &S,sizeof(S)) && found == 0)
      {
	if(strcmpi(S.sid,bs)==0)
	  {
	    gotoxy(34,10);
	    textcolor(LIGHTGREEN);
	    cprintf("Student Details");
	    gotoxy(30,11);
	    cprintf("_______________________");
	    gotoxy(4,14);
	    textcolor(GREEN);
	    cprintf("Student Id   : ");
	    textcolor(WHITE);
	    cprintf(sid);
	    gotoxy(4,18);
	    textcolor(GREEN);
	    cprintf("Student Name : ");
	    textcolor(WHITE);
	    cprintf(sname);
	    gotoxy(4,22);
	    textcolor(GREEN);
	    cprintf("Course       : ");
	    textcolor(WHITE);
	    cprintf(course);
	    gotoxy(4,26);
	    textcolor(GREEN);
	    cprintf("Mobile       : ");
	    textcolor(WHITE);
	    cprintf(mobile);
	    gotoxy(4,30);
	    textcolor(GREEN);
	    cprintf("Email        : ");
	    textcolor(WHITE);
	    cprintf(email);
	    found = 1;
	    gotoxy(21,38);
	    textcolor(RED+BLINK);
	    cprintf("Press Any Key To Go Back To Previous Menu");
	  }
      }
    ss.close();
    if(found == 0)
      {
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("No Record Found !!!");
      }
    getch();
  }

void design :: about_menu()
  {
    clrscr();
    out_box();
    gotoxy(27,4);
    cprintf("LIBRARY MANAGEMENT SYSTEM");
    gotoxy(27,5);
    cprintf("-------------------------");
    textcolor(LIGHTGREEN);
    gotoxy(4,8);
    cprintf("This is Library Management System Applicalion V 1.0.0.0");
    gotoxy(4,10);
    cprintf("This Application is Only For Project Purpose");
    gotoxy(4,12);
    cprintf("This Application is developed By :");
    gotoxy(4,16);
    textcolor(LIGHTMAGENTA);
    cprintf("Roll No : 1212     Name :  Amit Karmakar");
    gotoxy(4,18);
    cprintf("Roll No : 1206     Name :  Hitesh Mistry");
    gotoxy(4,20);
    cprintf("Roll No : 1243     Name :  Praveen Gauttam");
    gotoxy(4,22);
    cprintf("Roll No : 1204     Name :  Gaurav Tripathi");
    textcolor(LIGHTBLUE);
    gotoxy(4,26);
    cprintf("Audhyogik Shikshan Mandal, Institute Of Computer Studies");
    gotoxy(4,28);
    cprintf("Pimpri, Pune");
    gotoxy(21,38);
    textcolor(RED+BLINK);
    cprintf("Press Any Key To Go Back To Previous Menu");
    textcolor(WHITE);
    getch();
  }

void lib_record :: issue()
  {
    aa:
    char bn[30],ba[30],be[30],bq[10],bp[10];
    int found = 0;
    clrscr ();
    D.out_box();
    gotoxy(27,4);
    textcolor(YELLOW);
    cprintf("LIBRARY MANAGEMENT SYSTEM");
    gotoxy(27,5);
    cprintf("-------------------------");
    gotoxy(34,10);
    textcolor(LIGHTGREEN);
    cprintf("Book Issue");
    gotoxy(31,11);
    cprintf("________________");
    gotoxy(4,14);
    textcolor(MAGENTA);
    cprintf("Enter Book Id : ");
    gets(bno);
    fstream b;
    b.open("books.dat",ios::in|ios::out);
    while(b.read((char *) &B,sizeof(B)) && found == 0)
      {
	if(strcmpi(B.bid,bno)==0)
	  {
	    gotoxy(4,17);
	    textcolor(YELLOW);
	    cprintf("Book No     Name         Author        Edition      Price     Quantity");
	    gotoxy(4,18);
	    textcolor(WHITE);
	    cprintf("----------------------------------------------------------------------");
	    gotoxy(4,20);
	    cout << B.bid;
	    gotoxy(16,20);
	    cout << B.bname;
	    gotoxy(29,20);
	    cout << B.auth;
	    gotoxy(44,20);
	    cout << B.edition;
	    gotoxy(66,20);
	    cout << B.quant;
	    gotoxy(57,20);
	    cout << B.price;
	    gotoxy(4,21);
	    cprintf("----------------------------------------------------------------------");
	    found = 1;
	    strcpy(bn,B.bname);
	    strcpy(ba,B.auth);
	    strcpy(be,B.edition);
	    strcpy(bp,B.price);
	    strcpy(bq,B.quant);
	  }
      }
    b.close();
    if(found == 0)
      {
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("No Record Found !!!");
	getch();
	textcolor(WHITE);
	goto aa;
      }

    int cal = atol(bq);
    found = 0;

    gotoxy(4,23);
    textcolor(MAGENTA);
    cprintf("Enter Student Id : ");
    gets(sno);
    fstream s;
    s.open("student.dat",ios::in|ios::out);
    while(s.read((char *) &S,sizeof(S)) && found == 0)
      {
	if(strcmpi(S.sid,sno)==0)
	  {
	    gotoxy(4,25);
	    textcolor(YELLOW);
	    cprintf("Roll No     Name           Course       Mobile           Email");
	    gotoxy(4,26);
	    textcolor(WHITE);
	    cprintf("----------------------------------------------------------------------");
	    gotoxy(4,28);
	    cout << S.sid;
	    gotoxy(16,28);
	    cout << S.sname;
	    gotoxy(31,28);
	    cout << S.course;
	    gotoxy(42,28);
	    cout << S.mobile;
	    gotoxy(54,28);
	    cout << S.email;
	    gotoxy(4,29);
	    cprintf("----------------------------------------------------------------------");
	    found = 1;
	  }
      }
    s.close();
    if(found == 0)
      {
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("No Record Found !!!");
	getch();
	textcolor(WHITE);
	goto aa;
      }

    if(strcmp(bq,"0")==0)
      {
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("No Books In Stock To Issue !!!");
      }
    else
      {
	textcolor(GREEN);
	gotoxy(4,33);
	cprintf("Issue Date : ");
	gotoxy(47,33);
	cprintf("Return Date : ");
	xx:
	gotoxy(18,33);
	V.ventry(i_date,1);
	if(V.null_check(i_date)==1)
	     {
		for(int i=0;i<strlen(i_date);i++)
		 {
		   textcolor(15);
		   cprintf("%c%c%c",8,32,8);
		 }
	       goto xx;
	     }
	 bb:
	gotoxy(62,33);
	V.ventry(r_date,1);
	if(V.null_check(r_date)==1)
	     {
		for(int i=0;i<strlen(r_date);i++)
		 {
		   textcolor(15);
		   cprintf("%c%c%c",8,32,8);
		 }
	       goto bb;
	     }
	gotoxy(17,36);
	textcolor(RED+BLINK);
	cprintf("S");
	textcolor(BLUE);
	cprintf("ave");
	flushall();
	gotoxy(53,36);
	textcolor(RED+BLINK);
	cprintf("C");
	textcolor(BLUE);
	cprintf("ancel");
	char cho = tolower(getch());
	if(cho == 's')
	  {
	    fstream isu;
	    isu.open("lib_recd.dat",ios::out|ios::app);
	    if(isu==NULL)
	      {
		cout << "\nCan not open file !!!";
		getch();
		exit(0);
	      }
	    cal = cal - 1;
	    isu.write((char *) &LR,  sizeof(LR));
	    isu.close();
	    flushall();
	    sprintf(bq,"%d",cal);
	    B.issue_update(bno,bn,ba,be,bp,bq);
	    clrscr();
	    D.out_box();
	    textcolor(RED+BLINK);
	    gotoxy(25,31);
	    cprintf("Record Saved Successfully !!!");
	  }
      }
    getch();
  }

void book :: issue_update(char *no, char *xn, char *xa, char *xe, char *xp, char *xq)
  {
    fstream iu;
    int found = 0;
    iu.open("books.dat",ios::in|ios::out);
    while(iu.read((char *) &B,sizeof(B)) && found == 0)
      {
	if(strcmpi(B.bid,no)==0)
	  {
	    strcpy(bid,no);
	    strcpy(bname,xn);
	    strcpy(auth,xa);
	    strcpy(edition,xe);
	    strcpy(quant,xq);
	    strcpy(price,xp);
	    int pos = -1*sizeof(B);
	    iu.seekp(pos,ios::cur);
	    iu.write((char *) &B, sizeof(B));
	 }
      }
     iu.close();
  }

void lib_record :: retur()
  {
    clrscr ();
    char x[10],y[10];
    char bn[30],ba[30],be[30],bq[10],bp[10];
    int f=0;
    D.out_box();
    gotoxy(27,4);
    textcolor(YELLOW);
    cprintf("LIBRARY MANAGEMENT SYSTEM");
    gotoxy(27,5);
    cprintf("-------------------------");
    gotoxy(34,10);
    textcolor(LIGHTGREEN);
    cprintf("Book Return");
    gotoxy(31,11);
    cprintf("_________________");
    gotoxy(4,14);
    textcolor(MAGENTA);
    cprintf("Enter Book Id : ");
    gets(x);
    gotoxy(4,16);
    cprintf("Enter Student Id : ");
    gets(y);
    int found = 0;
    fstream b;
    b.open("books.dat",ios::in|ios::out);
    while(b.read((char *) &B,sizeof(B)) && found == 0)
      {
	if(strcmpi(B.bid,bno)==0)
	  {
	    found = 1;
	    strcpy(bn,B.bname);
	    strcpy(ba,B.auth);
	    strcpy(be,B.edition);
	    strcpy(bp,B.price);
	    strcpy(bq,B.quant);
	  }
      }
    b.close();
    if(found == 0)
      {
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("No Record Found !!!");
	getch();
	textcolor(WHITE);
      }
    int cal = atol(bq);
    fstream ret;
    ret.open("lib_recd.dat",ios::in|ios::out);
    fstream temp;
    temp.open("temp.dat",ios::out);
    ret.seekg(0,ios::beg);
    while(ret.read((char *) &LR, sizeof(LR)))
      {
	if(strcmpi(LR.bno,x)!=0 && strcmpi(LR.sno,x)!=0)
	  {
	    temp.write((char *) &LR, sizeof(LR));
	  }
	else
	  f=1;
      }
    ret.close();
    temp.close();
    flushall();
    remove("lib_recd.dat");
    rename("temp.dat","lib_recd.dat");
    if(f==1)
      {
	cal = cal + 1;
	flushall();
	sprintf(bq,"%d",cal);
	B.issue_update(bno,bn,ba,be,bp,bq);
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("Book Returned Successfully !!!");
	getch();
      }
    else
      {
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("No Record Found !!!");
	textcolor(WHITE);
      }
  }

void lib_record :: update_issue()
  {
    clrscr();
    char x[10],y[10];
    D.out_box();
    gotoxy(27,4);
    textcolor(YELLOW);
    cprintf("LIBRARY MANAGEMENT SYSTEM");
    gotoxy(27,5);
    cprintf("-------------------------");
    gotoxy(34,10);
    textcolor(LIGHTGREEN);
    cprintf("Update Issue");
    gotoxy(31,11);
    cprintf("_________________");
    gotoxy(4,14);
    textcolor(MAGENTA);
    cprintf("Enter Book Id : ");
    gets(x);
    gotoxy(4,16);
    cprintf("Enter Student Id : ");
    gets(y);
    int found = 0;
    fstream ub;
    ub.open("lib_recd.dat",ios::in|ios::out);
    while(ub.read((char *) &LR,sizeof(LR)) && found == 0)
      {
	if(strcmpi(LR.bno,x)==0 && strcmpi(LR.sno,y)==0)
	  {
	    gotoxy(4,18);
	    cprintf("Enter The New Date Of Book Issue :");
	    textcolor(GREEN);
	    gotoxy(4,20);
	    cprintf("New Book Id      : ");
	    gotoxy(4,24);
	    cprintf("New Student Id   : ");
	    gotoxy(4,28);
	    cprintf("New Issue Date   : ");
	    gotoxy(4,32);
	    cprintf("New Return Date  : ");
	    gotoxy(25,20);
	    puts(bno);
	    gotoxy(25,24);
	    puts(sno);
	    xx:
	    gotoxy(25,28);
	    V.ventry(i_date,1);
	    if(V.null_check(i_date)==1)
	     {
		for(int i=0;i<strlen(i_date);i++)
		 {
		   textcolor(15);
		   cprintf("%c%c%c",8,32,8);
		 }
	       goto xx;
	     }
	    aa:
	    gotoxy(25,32);
	    V.ventry(r_date,1);
	    if(V.null_check(r_date)==1)
	     {
		for(int i=0;i<strlen(r_date);i++)
		 {
		   textcolor(15);
		   cprintf("%c%c%c",8,32,8);
		 }
	       goto aa;
	     }
	    int pos = -1*sizeof(LR);
	    ub.seekp(pos,ios::cur);
	    ub.write((char *) &LR, sizeof(LR));
	    gotoxy(25,42);
	    textcolor(RED+BLINK);
	    cprintf("Updated Successfully........ !!!");
	    found = 1;
	  }
      }
    ub.close();
    if(found == 0)
      {
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("No Record Found !!!");
	getch();
	textcolor(WHITE);
      }
  }

void lib_record :: view_issue()
  {
    clrscr();
    int found = 0;
    char x[10];
    D.out_box();
    gotoxy(27,4);
    textcolor(YELLOW);
    cprintf("LIBRARY MANAGEMENT SYSTEM");
    gotoxy(27,5);
    cprintf("-------------------------");
    gotoxy(4,7);
    textcolor(GREEN);
    cprintf("Student Id : ");
    gets(x);
    gotoxy(4,10);
    textcolor(YELLOW);
    cprintf("Book Id        Student Id          Issued Date              Return Date");
    gotoxy(4,11);
    cprintf("-----------------------------------------------------------------------");
    int m=13;
    fstream vi;
    vi.open("lib_recd.dat",ios :: in);
    vi.seekg(0, ios :: beg);
    while(vi.read((char *) &LR, sizeof(LR)))
      {
	if(strcmpi(x,sno)==0)
	  {
	    gotoxy(4,m);
	    textcolor(WHITE);
	    cprintf(bno);
	    gotoxy(19,m);
	    cprintf(sno);
	    gotoxy(39,m);
	    cprintf(i_date);
	    gotoxy(64,m);
	    cprintf(r_date);
	    m = m + 2;
	    found = 1;
	  }
      }
    vi.close();
    if(found == 0)
      {
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("No Record Found !!!");
	textcolor(WHITE);
      }
    getch();
  }

void book :: avail_book()
  {
    int x=11;
    int f=0;
    clrscr();
    D.out_box();
    textcolor(CYAN);
    gotoxy(33,4);
    cprintf("ALL Books List");
    gotoxy(29,5);
    cprintf("______________________");
    textcolor(LIGHTGRAY);
    gotoxy(4,8);
    cprintf("Book No     Name         Author        Edition      Price     Quantity");
    gotoxy(4,9);
    cprintf("----------------------------------------------------------------------");
    fstream fp;
    fp.open("books.dat",ios::in);
    fp.seekg(0,ios::beg);
    if(fp==NULL)
      {
	cout << "\nCan not open file !!!";
	getch();
	exit(0);
      }
    while(fp.read((char * ) &B, sizeof(B)))
      {
	if(strcmp(quant,"0")!=0)
	  {
	    f=1;
	    gotoxy(4,x);
	    cout << bid;
	    gotoxy(16,x);
	    cout << bname;
	    gotoxy(29,x);
	    cout << auth;
	    gotoxy(44,x);
	    cout << edition;
	    gotoxy(66,x);
	    cout << quant;
	    gotoxy(57,x);
	    cout << price;
	    x = x+2;
	  }
      }
    if(f==0)
      {
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("No Record Found !!!");
	textcolor(WHITE);
      }
    fp.close();
    getch();
  }

void book :: notavail_book()
  {
    int x=11;
    int f=0;
    clrscr();
    D.out_box();
    textcolor(CYAN);
    gotoxy(33,4);
    cprintf("ALL Books List");
    gotoxy(29,5);
    cprintf("______________________");
    textcolor(LIGHTGRAY);
    gotoxy(4,8);
    cprintf("Book No     Name         Author        Edition      Price     Quantity");
    gotoxy(4,9);
    cprintf("----------------------------------------------------------------------");
    fstream fp;
    fp.open("books.dat",ios::in);
    fp.seekg(0,ios::beg);
    if(fp==NULL)
      {
	cout << "\nCan not open file !!!";
	getch();
	exit(0);
      }
    while(fp.read((char * ) &B, sizeof(B)))
      {
	if(strcmp(quant,"0")==0)
	  {
	    f=1;
	    gotoxy(4,x);
	    cout << bid;
	    gotoxy(16,x);
	    cout << bname;
	    gotoxy(29,x);
	    cout << auth;
	    gotoxy(44,x);
	    cout << edition;
	    gotoxy(66,x);
	    cout << quant;
	    gotoxy(57,x);
	    cout << price;
	    x = x+2;
	  }
      }
    if(f==0)
      {
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("No Record Found !!!");
	textcolor(WHITE);
      }
    fp.close();
    getch();
  }

void lib_record :: stud_book()
  {
    clrscr();
    int f=0;
    char sn[10];
    D.out_box();
    gotoxy(25,4);
    textcolor(YELLOW);
    cprintf("LIBRARY MANAGEMENT SYSTEM");
    gotoxy(25,5);
    cprintf("-------------------------");
    textcolor(CYAN);
    gotoxy(4,8);
    cprintf("Student Id : ");
    gets(sn);
    gotoxy(4,9);
    textcolor(YELLOW);
    cprintf("________________________________________________________________________");
    fstream st;
    st.open("student.dat", ios ::in);
    st.seekg(0, ios::beg);
    while(st.read((char *) &S, sizeof(S)))
      {
	if(strcmp(S.sid,sn)==0)
	  {
	    f=1;
	    textcolor(GREEN);
	    gotoxy(4,13);
	    cprintf("Student Id     : ");
	    puts(S.sid);
	    gotoxy(4,15);
	    cprintf("Student Name   : ");
	    puts(S.sname);
	    gotoxy(4,17);
	    cprintf("Student Course : ");
	    puts(S.course);
	    gotoxy(4,19);
	    cprintf("Student Mobile : ");
	    puts(S.mobile);
	    gotoxy(4,21);
	    cprintf("Student Email  : ");
	    puts(S.email);
	  }
      }
    gotoxy(4,23);
    textcolor(YELLOW);
    cprintf("________________________________________________________________________");
    st.close();
    if(f==0)
      {
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("No Record Found !!!");
	textcolor(WHITE);
      }
    gotoxy(4,25);
    textcolor(WHITE);
    cprintf("Book No     Name         Author        Edition      Price     Quantity");
    gotoxy(4,26);
    cprintf("----------------------------------------------------------------------");
    fstream fi;
    f = 0;
    fi.open("lib_recd.dat",ios :: in);
    fi.seekg(0,ios :: beg);
    fstream fb;
    int x = 28;
    while(fi.read((char *) &LR, sizeof(LR)))
      {
	if(strcmpi(sn,LR.sno)==0)
	  {
	    fb.open("books.dat",ios :: in);
	    fb.seekg(0,ios :: beg);
	    while(fb.read((char *) &B, sizeof(B)))
	     {
	       if(strcmpi(LR.bno,B.bid)==0)
		{
		  f = 1;
		  gotoxy(4,x);
		  cout << B.bid;
		  gotoxy(16,x);
		  cout << B.bname;
		  gotoxy(29,x);
		  cout << B.auth;
		  gotoxy(44,x);
		  cout << B.edition;
		  gotoxy(66,x);
		  cout << B.quant;
		  gotoxy(57,x);
		  cout << B.price;
		  x = x+2;
		}
	     }
	   fb.close();
	  }
      }
    if(f==0)
      {
	textcolor(RED+BLINK);
	gotoxy(25,31);
	cprintf("No Record Found !!!");
	textcolor(WHITE);
      }
    fi.close();
    getch();
  }
