import java.io.Serializable;

public class Instructor extends Person implements Serializable {

	private String department;
	
	public Instructor(){
		super();
	}
	
	public Instructor(String id, String name){
		super(id, name);
	}

	public String getDepartment() {
		return department;
	}

	public void setDepartment(String department) {
		this.department = department;
	}
}