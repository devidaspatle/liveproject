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
using System.Net;

public partial class contact : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void btnSubmit_Click(object sender, EventArgs e)
    {
        //try
        //{

        //    string MessageBody = "Enquiry Detail:" + "\n\n First Name:" + txtFirstName.Text + "\n\n Last Name:" + txtLastName.Text + "\n\n Address:" + txtAddress.Text + "\n\n City:" + txtCity.Text + "\n\n Phone No:" + txtPhoneNo.Text + "\n\n Email:" + txtEmailId.Text + "\n\nEnquiry Detail:" + txtDetail.Text;
        //    System.Net.Mail.SmtpClient smtp = new System.Net.Mail.SmtpClient();
        //    System.Net.Mail.MailMessage mails = new System.Net.Mail.MailMessage();
        //    smtp.Host = "vishalpaints.com";
        //    smtp.Credentials = new System.Net.NetworkCredential("vishalpa", "ashish*$2010");
        //    mails.From = new System.Net.Mail.MailAddress(txtEmailId.Text);
        //    mails.To.Add(new System.Net.Mail.MailAddress("info@vishalpaints.com"));
        //    mails.Body = MessageBody;
        //    mails.Subject = "Welcome to vishalpaints.com";
        //    smtp.UseDefaultCredentials = true;
        //    smtp.Send(mails);
        //    lblSuccess.Text = "Your Enquiry Details Have Been Sent Successfully.";
        //    clear();
        //    // Response.Redirect("SucessReg.aspx");
        //}
        //catch (Exception ex)
        //{
        //    lblSuccess.Text = ex.Message;
        //}

    }
    //private void clear()
    //{
    //    txtFirstName.Text = "";
    //    txtLastName.Text = "";
    //    txtAddress.Text = "";
    //    txtCity.Text = "";
    //    txtPhoneNo.Text = "";
    //    txtEmailId.Text = "";
    //    txtDetail.Text = "";
    //}

}
