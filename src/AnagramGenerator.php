<?php
    class AnagramGenerator {
        function makeAnagram($input) {
            $chars = str_split($input);
            sort($chars);
            return implode("", $chars);

        }
    }
?>




<!-- class AnagramGenerator {
    function makeAnagram($chars, $size, $combinations = array()) {
        //$chars = str_split($input);

        if (empty($combinations)) {
            $combinations = $chars;
        }


        if ($size == 1) {
            return $combinations;
        }
        $new_combinations = array();

        foreach ($combinations as $combination) {
            foreach ($chars as $char) {
                $new_combinations[] = $combination . $char;
            }
        }
        return sampling($chars, $size - 1, $new_combinations);
    }
} -->
