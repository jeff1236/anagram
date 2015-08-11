<?php
    require_once "src/AnagramGenerator.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase {
        function test_makeAnagram_twoLetters() {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input = "on";
            $input2 = array("no");

            //Act
            $result = $test_AnagramGenerator->makeAnagram($input, $input2);

            //Assert
            $this->assertEquals(array(array("no"), array()), $result);

        }

        function test_makeAnagram_threeLetters() {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input = "cab";
            $input2 = array("abc");

            //Act
            $result = $test_AnagramGenerator->makeAnagram($input, $input2);

            //Assert
            $this->assertEquals(array(array("abc"), array()), $result);
        }

        function test_makeAnagram_twoWordsAgainstMainWord() {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input = "bread";
            $input2 = array("beard", "wind");


            //Act
            $result = $test_AnagramGenerator->makeAnagram($input, $input2);

            //Assert
            $this->assertEquals(array(array("beard"), array("wind")), $result);
        }


    }
?>
