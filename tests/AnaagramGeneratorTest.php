<?php
    require_once "src/AnagramGenerator.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase {
        function test_makeAnagram_twoLetters() {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input = "on";

            //Act
            $result = $test_AnagramGenerator->makeAnagram($input);

            //Assert
            $this->assertEquals("no", $result);

        }
    }
?>
