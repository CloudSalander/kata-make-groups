<?php
class GroupMaker {
    private array $students;
    private int $groupSize;

    const ENTER_STUDENTS_MSG = "Please, enter students one by one. Empty entry to stop";

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
        var_dump($this->students);
    }
    public function enterGroupSize(): void {}
    public function generateGroups(): array {}
    public function showGroups(): void {}
}
?>