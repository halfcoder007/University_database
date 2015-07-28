import java.awt.*; 
import java.applet.*; 

import java.awt.event.*;



public class applet extends Applet implements ActionListener 
{

     Button okButton; 
     Button wrongButton; 
     TextField nameField; 
     CheckboxGroup radioGroup; 
     Checkbox radio1; 
     Checkbox radio2; 
     Checkbox radio3;
     String abc= "";
     Image img1;
     Image img2;
     Image img3;
     Label l1;
    

     public void init()  
     { 
        setBackground(Color.gray);
   
        l1=new Label("Add your Comment");
          img1=getImage(getDocumentBase(),"man.jpg");
          img2=getImage(getDocumentBase(),"shaily.jpg");
          img3=getImage(getDocumentBase(),"ppt.jpg");
     
          
          nameField = new TextField("Leave your Comment...",110); 
          radioGroup = new CheckboxGroup(); 
          radio1 = new Checkbox("Red", radioGroup,false); 
          radio2 = new Checkbox("Blue", radioGroup,false); 
          radio3 = new Checkbox("Black", radioGroup,true); 
           okButton = new Button("Submit!"); 
          wrongButton = new Button("Cancel!");
          add(l1);
          add(nameField);
           add(okButton); 
          add(wrongButton); 
          add(radio1); 
          add(radio2); 
          add(radio3);
           Font myFont = new Font("Serif",Font.BOLD,16);
                l1.setFont(myFont);


          okButton.addActionListener(this); 
          wrongButton.addActionListener(this); 
         }  

 


         public void paint(Graphics g) 
         { 

          if (radio1.getState()) g.setColor(Color.red); 

        else if (radio2.getState()) g.setColor(Color.blue); 

          else g.setColor(Color.black);
          g.drawString(abc,47,110);
          g.drawImage(img1,20,100,15,15,this);
          //g.drawString("",20,110);
          //System.out.println(abc);
         

         
Font font1 = new Font("Arial",Font.BOLD,20);
    g.setFont(font1);
             g.drawString("About the Site:",20,150); 
             
             Font font2 = new Font("Arial",Font.PLAIN,16);
    g.setFont(font2);
    g.drawString("The website is built to provide a database of movies Students can search movies through the database. ",20,170);
    g.drawString("Login and sign up facility will be provided for the students.",20,190); 
    g.drawString("Each student will have a User Id through which they can login and will have his own profile.",20,210); 
    g.drawString("A collection of movies will be provided on each students profile.  ",20,230);
    g.drawString("Users will be able to update their list and edit descriptions about the movies. ",20,250);
    g.drawString("Any movie when searched will provide the details of the movie its ratings and etc. ",20,270);
    g.drawString("Additionaly the user can watch the trailers of all the upcoming movies and also can book online tickets which are in the local theatres.",20,290); 

    
          Font font3 = new Font("Arial",Font.BOLD,15);
    g.setFont(font3);

    Font font4 = new Font("Arial",Font.BOLD,20);
    g.setFont(font4);
             g.drawString("About Us:",20,330); 

            g.drawImage(img1,20,350,100,100,this);

              Font font5 = new Font("Arial",Font.BOLD,14);
              g.setFont(font5);
          g.drawString("Manish Kumar",20,470);
           Font font6 = new Font("Arial",Font.PLAIN,14);
    g.setFont(font6);
          g.drawString("B.Tech CSE",20,485);

          g.drawImage(img2,150,350,100,100,this);
           Font font7 = new Font("Arial",Font.BOLD,14);
              g.setFont(font7);
          g.drawString("Shaily Mehta",150,470);
           Font font8 = new Font("Arial",Font.PLAIN,14);
    g.setFont(font8);
          g.drawString("B.Tech CSE",150,485);

          g.drawImage(img3,280,350,100,100,this);
           Font font9 = new Font("Arial",Font.BOLD,14);
              g.setFont(font9);
          g.drawString("Prapti Khawas",280,470);
           Font font10 = new Font("Arial",Font.PLAIN,14);
    g.setFont(font10);
          g.drawString("B.Tech CSE",280,485);



    }



        public void actionPerformed(ActionEvent evt)  
         { 

              if (evt.getSource() == okButton) 
              {
                 abc+=nameField.getText()+"  ";
                 
repaint();
              }

                   

          else if (evt.getSource() == wrongButton)  
          {

               wrongButton.setLabel("Not here!"); 
  
               nameField.setText("That was the wrong button!"); 

               repaint(); 
          } 
     } 

} 

//<applet code="applet.class" width="1000" height="500"></applet>