/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package nextgenpos;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Forhan
 */
public class DB {
    private String user;
    private String password;
    private Connection con;
    private Statement st;
    private ResultSet rs;
    private String url;
    
    public DB(String u, String p){
        user = u;
        password = p;
        con = null;
        st = null;
        rs = null;
        url = "jdbc:mysql://localhost/pos";
    }
    
    public void setConnection(){
        try {
            this.con = DriverManager.getConnection(url, user, password);
        } catch(SQLException se){
            System.out.println(se.getMessage());
        }
    }
    
    public String getUserPassword(String username){
        String result = null;
        
        try{
            this.setConnection();
            this.st = this.con.createStatement();
            String q = "SELECT password from POS.USERS where username = ";
            q +="'";
            q += username;
            q +="'";
            this.rs = this.st.executeQuery(q);

            if(this.rs.next()){
                result = this.rs.getString(1);
            }
        } catch(SQLException se){
            System.out.println(se.getMessage());
        } finally{
            this.closeConnection();
        }
        return result;
    }
    
    public void closeConnection(){
        try {
            if (this.rs != null) {
                this.rs.close();
            }
            if (this.st != null) {
                this.st.close();
            }
            if (this.con != null) {
                this.con.close();
            }
            
        } catch (SQLException ex) {
            Logger lgr = Logger.getLogger(Test.class.getName());
            lgr.log(Level.WARNING, ex.getMessage(), ex);
        }
    }
    
//    /* Returns password for a given user or null if user not found */
//    public String getPassword(String username){
//    try {
//        con = DriverManager.getConnection(url, user, password);
//        st = con.createStatement();
//        //rs = st.executeQuery("SELECT VERSION()");
//        String q = "SELECT password from POS.USERS where username = ";
//        q +="'";
//        q += username;
//        q +="'";
//        rs = st.executeQuery(q);
//
//        if(rs.next()){
//            result = rs.getString(1);
//        }
//
//    } catch (SQLException ex) {
//        Logger lgr = Logger.getLogger(Test.class.getName());
//        lgr.log(Level.SEVERE, ex.getMessage(), ex);
//
//    } finally {
//        try {
//            if (rs != null) {
//                rs.close();
//            }
//            if (st != null) {
//                st.close();
//            }
//            if (con != null) {
//                con.close();
//            }
//            
//        } catch (SQLException ex) {
//            Logger lgr = Logger.getLogger(Test.class.getName());
//            lgr.log(Level.WARNING, ex.getMessage(), ex);
//        }
//    }        
//        return result;
//    }
    
    public static void main(String [] args){
        DB db = new DB("root", "");
        System.out.println(db.getUserPassword("forhan"));
    }
}