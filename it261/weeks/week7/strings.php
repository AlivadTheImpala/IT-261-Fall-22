<?php
//our str_replace and substr functions

//substr($string, start, length) start is officially offset in the php documentation.

//If start is non-negative, the returned string will start at the start'th position in string, counting from zero. For instance, in the string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c', and so forth.

// If start is negative, the returned string will start at the start'th character from the end of string.

// If string is less than start characters long, an empty string will be returned.

// If length is given and is positive, the string returned will contain at most length characters beginning from offset (depending on the length of string).

// If length is given and is negative, then that many characters will be omitted from the end of string (after the start position has been calculated when a offset is negative). If offset denotes the position of this truncation or beyond, an empty string will be returned.

// If length is given and is 0, an empty string will be returned.

// If length is omitted or null, the substring starting from offset until the end of the string will be returned.

//str_replace syntax

// str_replace(
// array|string $search,
// array|string $replace, 
// string|array $subject, 
// int &$count = null 
// ): string|array

// search = the value being searched for.
// replace = the replacement value that replaces found search values.
// subject = the string or array that is being searched and replaced on.
// count = If passed, this will be set to the number of replacements performed.

$statement = 'Presently, I am reading Ways of Drawing';
echo $statement;
echo '<br>';
echo substr($statement, 0);
echo '<br>';
echo substr($statement, 1);
echo '<br>';
echo substr($statement, 11);
echo '<h1>Now I want to display the words: I am Reading</h1>';
echo '<br>';
echo substr($statement, 11, 12);
echo '<h1>Now I want to display the word: Ways</h1>';
echo '<h2>For that we will use a negative number for the start and length values</h2>';
echo '<br>';
echo substr($statement, -15, 4);
echo '<br>';
echo substr($statement, -7, 7);



echo '<br>';
echo '<h2>Now for the str_replace function</h2>';

$statement2 = 'Hulu adapted the book the Looming Tower';
echo str_replace('the', 'The', $statement2,);
