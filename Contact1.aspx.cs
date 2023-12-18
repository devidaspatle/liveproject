using System;
using System.Collections;
using System.Configuration;
using System.Data;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Xml.Linq;

public partial class Contact1 : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        try
        {
            string MessageBody = "Customer Name:";
               //+ " " + TxtFname.Text + " " + TxtLname.Text + ", " + "\n\n" +
            //    "Address:" + " " + TxtAdd.Text + ", " + "\n\n" + "City:" + " " + Txtcity.Text + "," + "\n\n" + "Phone No:" + " " + Txtphone.Text + "," + "\n\n" + "Mobile No:" + Txtmobile.Text + "\n\n" + "Email Id :" + TxtEmail.Text + "," + "\n\n" +
            //    "Enquiry Details:" + "\\n" + " Budget " + "" + TxtBudget.Text + "Rs." + "," + "\n\n" + "Sq. Ft. Details:" + " " + Txtsqinfo.Text;

            //"Dear " + TxUser.Text + "\n\n Your Account at lucky2bid.com has been sucessfully created, following are your login details.\n\n Username : " + TxUser.Text + "\n Password : " + TxtPassword.Text + "\n\n Please click on link below to activate your account. \n\n  http://www.lucky2bid.com/Activation.aspx?nm=" + TxUser.Text;
            System.Net.Mail.SmtpClient smtp = new System.Net.Mail.SmtpClient();
            System.Net.Mail.MailMessage mails = new System.Net.Mail.MailMessage();
            // smtp.Host = "75.126.194.250";
            smtp.Host = "vishalpaints.com";
            smtp.Credentials = new System.Net.NetworkCredential("vishalpa", "ashish*$2010");
            mails.From = new System.Net.Mail.MailAddress("supriya.padoley@gmail.com");
            //mails.To.Add(new System.Net.Mail.MailAddress("avinath.sherekar@yahoo.com"));
            mails.To.Add(new System.Net.Mail.MailAddress("Varma.real@gmail.com"));
            mails.Body = MessageBody;
            mails.Subject = "Welcome to varmarealestate.com";
            smtp.UseDefaultCredentials = true;
            smtp.Send(mails);
          //  lblSuccess.Visible = true;
           // lblSuccess.Text = "Your Enquiry Details Have Been Sent Successfully.";
           // clear();
            //Response.Redirect("SucessReg.aspx");
        }
        catch (Exception ex)
        {
           // lblSuccess.Visible = true;
           // lblSuccess.Text = ex.Message;
        }
    }
}
