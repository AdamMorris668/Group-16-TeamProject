import java.awt.*;
import java.awt.event.*;
import java.net.URI;
import javax.swing.*;

public class LoginForm extends JFrame {
    private JLabel userLabel, passLabel, displayLabel;
    private JTextField userField, passField;
    private JButton submitButton;

    public LoginForm() {
        setTitle("Login Form");
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setSize(400, 200);
        setLocationRelativeTo(null);

        userLabel = new JLabel("Username:");
        userField = new JTextField(20);

        passLabel = new JLabel("Password:");
        passField = new JPasswordField(20);

        submitButton = new JButton("Submit");
        submitButton.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                String user = userField.getText();
                String pass = passField.getText();
                if (pass.equals("password") && user.equals("username")) {
                    displayLabel.setText("Credentials Accepted.");
                    try {
                        URI uri = new URI("admin.html");
                        Desktop.getDesktop().browse(uri);
                    } catch (Exception ex) {
                        ex.printStackTrace();
                    }
                } else {
                    displayLabel.setText("Please try again.");
                }
            }
        });

        displayLabel = new JLabel("");

        JPanel panel = new JPanel(new GridLayout(3, 2));
        panel.add(userLabel);
        panel.add(userField);
        panel.add(passLabel);
        panel.add(passField);
        panel.add(submitButton);
        panel.add(displayLabel);

        getContentPane().add(panel);
        setVisible(true);
    }

    public static void main(String[] args) {
        LoginForm loginForm = new LoginForm();
    }
}
