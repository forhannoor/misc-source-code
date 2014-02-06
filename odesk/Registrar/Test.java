public class Test {

	public static void main(String[] args) {
	
		Student s1 = new Student("082 573 042", "Forhan Noor");
		Student s2 = new Student("082 551 040", "Rokeya Karim");
		Student s3 = new Student("082 338 042", "Samsul Alam");
		Instructor i = new Instructor("Szz", "Dr. Shazzad Hossain");
		
		System.out.println("Student 1 information: " + s1);
		System.out.println("Instructor information: " + i);
		
		s1.setCredits(132);
		s1.setGradePoints(429);
		
		System.out.println("Student 1 GPA: " + s1.getGPA());
		System.out.println("Comparison result between student 1 and student 2: " + s1.equals(s2));
		System.out.println("Comparison result between student 1 and student 1: " + s1.equals(s1));
		
		i.setDepartment("EECS");
		System.out.println("Instructor is from department: " + i.getDepartment());
		
		Course c = new Course("Introduction to Computer Science", "CSE115");
		c.setInstructor(i);
		
		System.out.println("Course name: " + c.getName());
		System.out.println("Course code: " + c.getRegistrationCode());
		System.out.println("Course Instructor: " + c.getInstructor());
		
		try{
			c.addStudent(s1);
			System.out.println("Student 1 is added to course");
			
			System.out.println("Searching for student 1 in course...");
			int index = c.search(s1.getId());
			
			if(index > -1){
				System.out.println("Student 1 registered at order: " + (index + 1));
			}
			
			else{
				System.out.println("Student 1 is not registered for the course");
			}
			
			System.out.println("Searching for student 2 in course...");
			index = c.search(s2.getId());
			
			if(index > -1){
				System.out.println("Student 2 registered at order: " + (index + 1));
			}
			
			else{
				System.out.println("Student 2 is not registered for the course");
			}
			
			System.out.println("Removing student 1 from course...");
			c.removeStudent(s1);
			System.out.println("Student 1 removed from course");
			System.out.println("Searching for student 1 in course...");
			index = c.search(s1.getId());
			
			if(index > -1){
				System.out.println("Student 1 registered at order: " + (index + 1));
			}
			
			else{
				System.out.println("Student 1 is not registered for the course");
			}
			
			System.out.println("Writing course object into file...");
			c.save();
			System.out.println("Written course object into file");
			
			System.out.println("Reading course object from file...");
			Course x = c.retrieve();
			
			if(x == null){
				System.out.println("Failed to read course object from file");
			}
			
			else{
				System.out.println("Read course object from file.");
				System.out.println("Course name: " + x.getName());
				System.out.println("Course code: " + x.getRegistrationCode());
			}
		} catch(RegistrarException re){
			re.printStackTrace();
		}
	}
}