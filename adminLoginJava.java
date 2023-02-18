String pass;
String user;
user = txtUser.getText();
pass = txtPass.getText();

if(pass.equals("password") && user.equals("username") ){
    lblDisplay.setText("Credentials Accepted.");
    // Redirect the user to index.html
    try {
        // Replace "index.html" with the desired URL to redirect the user to
        URI uri = new URI("admin.html");
        java.awt.Desktop.getDesktop().browse(uri);
    } catch (Exception e) {
        e.printStackTrace();
    }
}
else{
    lblDisplay.setText("Please try again.");
}