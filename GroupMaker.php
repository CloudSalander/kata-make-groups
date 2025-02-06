<?php
class GroupMaker {
    private array $students;
    private int $groupSize;

    const ENTER_STUDENTS_MSG = "Please, enter students one by one. Empty entry to stop";
    const ENTER_GROUP_SIZE_MSG = "Please, enter group size";

    public function __construct() {
        $this->students = [];
    }

    public function enterStudents(): void {
        $student = readline(self::ENTER_STUDENTS_MSG);
        //TODO: We can improve input validation
        while($student != "") {
            array_push($this->students,$student);
            $student = readline(self::ENTER_STUDENTS_MSG);
        }
    }
    public function enterGroupSize(): void {
        //TODO: Validate this input
        $this->groupSize = intval(readline(self::ENTER_GROUP_SIZE_MSG));
        $con = 0;
    }
    public function generateGroups(): array {
        $groups = [];
        $con = 0;
        foreach($this->students as $student) {
            array_push($groups[$con%$this->groupSize],$student);
            ++$con;
        }
    }
    private function generateEmptyGroups() {
        for($con = 0; $con < $this->groupSize;++$i) {
            $this->groupSize 
        }
    }
}
?>