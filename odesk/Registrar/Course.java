import java.io.*;

public class Course implements Serializable{

	private String name;
	private String registrationCode;
	private Student [] students;
	private Instructor instructor;
	private int numStudents;
	
	public Course(String name, String registrationCode){
		this.name = name;
		this.registrationCode = registrationCode;
		numStudents = 0;
		students = new Student [35];
		
		// initialize students array
		for(int i = 0; i < 35; i++){
			students[i] = new Student();
		}
	}

	public Instructor getInstructor() {
		return instructor;
	}

	public void setInstructor(Instructor instructor) {
		this.instructor = instructor;
	}
	
	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getRegistrationCode() {
		return registrationCode;
	}

	public void setRegistrationCode(String registrationCode) {
		this.registrationCode = registrationCode;
	}

	public int search(String id){
		Student s = null;
		
		for(int i = 0; i < students.length; i++){
			s = students[i];
			
			if(s != null){
				if(s.getId() == id){
					return i;
				}
			}
		}
		
		return -1;
	}
	
	public void addStudent(Student s) throws RegistrarException{
		if(numStudents == 35){	// course is full
			throw new RegistrarException("The course is full. Cannot add new student.");
		}
		
		else{
			int temp = search(s.getId());	// check if student is already registered
			
			if(temp < 0){	// student not registered
				students[numStudents] = s;
				numStudents += 1;
			}
		}
	}
	
	public void removeStudent(Student s) throws RegistrarException{
		int temp = search(s.getId());
		
		if(temp < 0){	// student not found
			throw new RegistrarException("Student not found.");
		}
		
		else{	// student found
			students[temp] = null;
			
			if(numStudents > 1){
				numStudents -= 1;
			}
		}
	}
	
	public void save(){
		try{
			FileOutputStream fout = new FileOutputStream("course.ser");
			ObjectOutputStream out = new ObjectOutputStream(fout);
			out.writeObject(this);
			out.close();
			fout.close();
		} catch(IOException ioe){
			ioe.printStackTrace();
		}
	}
	
	public Course retrieve(){
		Course temp = null;
		
		try{
			FileInputStream fin = new FileInputStream("course.ser");
			ObjectInputStream oin = new ObjectInputStream(fin);
			temp = (Course) oin.readObject();
			oin.close();
			fin.close();
		} catch(IOException ioe){
			ioe.printStackTrace();
		} catch(ClassNotFoundException cnf){
			cnf.printStackTrace();
		}
		
		return temp;
	}
}