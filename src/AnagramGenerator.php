<?php
    class AnagramGenerator {

        function makeAnagram($input, $anagram) {
            $input_array = str_split($input);
            sort($input_array);
            $matched_words = array();
            $un_matched_words = array();


            foreach ($anagram as $ana) {
                $ana_array = str_split($ana);
                sort($ana_array);
                if (count($input_array) == count($ana_array)) {
                    if ($input_array == $ana_array) {
                        array_push($matched_words, $ana);
                    }
                    else {
                        array_push($un_matched_words, $ana);
                    }
                }
                else {
                    $result = array_intersect($ana_array, $input_array);
                    sort($result);
                    if (count($ana_array) < count($input_array)) {
                        if ($result == $ana_array) {
                            array_push($matched_words, $ana);
                        }
                        else {
                            array_push($un_matched_words, $ana);
                        }
                    }
                    else {
                        array_push($un_matched_words, $ana);
                    }
                }

            }
            return array($matched_words, $un_matched_words);
        }
    }
?>
