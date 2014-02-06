import java.io.Serializable;

public class Student extends Person implements Serializable{

	private int credits;
	private double gradePoints;
	
	public Student(){
		super();
	}
	
	public Student(String id, String name){
		super(id, name);
	}

	public int getCredits() {
		return credits;
	}

	public void setCredits(int credits) {
		this.credits = credits;
	}

	public double getGradePoints() {
		return gradePoints;
	}

	public void setGradePoints(double gradePoints) {
		this.gradePoints = gradePoints;
	}
	
	public String getName(){
		return super.getName();
	}
	
	@Override
	public boolean equals(Object o){
		Student x = (Student) o;
		
		if(this.getId().equals(x.getId())){
			return true;
		}
		
		return false;
	}
	
	public double getGPA(){
		return gradePoints / (double) credits;
	}
}