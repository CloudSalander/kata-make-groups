<?php
class GroupMaker {
    private array $students;
    private int $groupSize;
    private array $groupedStudents;

    const ENTER_STUDENTS_MSG = "Please, enter students one by one. Empty entry to stop";
    const ENTER_GROUP_SIZE_MSG = "Please, enter group size";

    public function __construct() {
        $this->students = [];
        $this->groupedStudents = [];
    }

    public function enterStudents(): void {
        $student = readline(self::ENTER_STUDENTS_MSG);
        //TODO: Input validation?
        while($student != "") {
            array_push($this->students,$student);
            $student = readline(self::ENTER_STUDENTS_MSG);
        }
    }
    public function enterGroupSize(): void {
        //TODO: Validate this input
        $this->groupSize = intval(readline(self::ENTER_GROUP_SIZE_MSG));
    }
    public function generateGroups(): void {
        $this->groupedStudents = $this->generateEmptyGroups();
        $con = 0;
        foreach($this->students as $student) {
            array_push($this->groupedStudents[$con%$this->groupSize],$student);
            ++$con;
        }
        var_dump($this->groupedStudents);
    }
    private function generateEmptyGroups(): array {
        $groups = [];
        for($con = 0; $con < $this->groupSize; ++$con) {
            $groups[$con] = [];
        }
        return $groups;
    }
}
?>