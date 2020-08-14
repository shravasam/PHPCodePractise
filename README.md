# PHPCodePractise

Regex important points to be noted :

Regular expressions can be used to perform all types of text search and text replace operations.
The delimiter can be any character that is not a letter, number, backslash or space. The most common delimiter is the forward slash (/), but when your pattern contains forward slashes it is convenient to choose other delimiters such as # or ~.

1. / is the delimiter, hello is the pattern that is being searched for, and i is a modifier that makes the search case-insensitive.
2. Regular Expression Modifiers- Modifiers can change how a search is performed.

                    i ---	Performs a case-insensitive search
                    m ---	Performs a multiline search (patterns that search for the beginning or            end of a string will match the beginning or end of each line)
                    u --- Enables correct matching of UTF-8 encoded patterns
3. Regular Expression Patterns -Brackets are used to find a range of characters:

                    [abc]   ---	Find one character from the options between the brackets
                    [^abc]  ---	Find any character NOT between the brackets
                    [0-9]   ---	Find one character from the range 0 to 9

4.  Metacharacters - Metacharacters are characters with a special meaning

                    | 	Find a match for any one of the patterns separated by | as in: cat|dog|fish
                    . 	Find just one instance of any character
                    ^ 	Finds a match as the beginning of a string as in: ^Hello
                    $ 	Finds a match at the end of the string as in: World$
                    \d 	Find a digit
                    \s 	Find a whitespace character
                    \b 	Find a match at the beginning of a word like this: \bWORD, or at the end of a       word like this: WORD\b
                    \uxxxx 	Find the Unicode character specified by the hexadecimal number xxxx
5.  Quantifiers - Quantifiers define quantities:

                    n+ 	Matches any string that contains at least one n
                    n* 	Matches any string that contains zero or more occurrences of n
                    n? 	Matches any string that contains zero or one occurrences of n
                    n{x} 	Matches any string that contains a sequence of X n's
                    n{x,y} 	Matches any string that contains a sequence of X to Y n's
                    n{x,} 	Matches any string that contains a sequence of at least X n's

Note: If your expression needs to search for one of the special characters you can use a backslash ( \ ) to escape them. For example, to search for one or more question marks you can use the following expression: $pattern = '/\?+/';

6. Grouping

You can use parentheses ( ) to apply quantifiers to entire patterns. They also can be used to select parts of the pattern to be used as a match.

7. 

    1.  preg_filter() 	                Returns a string or an array with pattern matches replaced,                                       but only if matches were found

    2.  preg_grep() 	                Returns an array consisting only of elements from the input                                       array which matched the pattern
    
    3.  preg_last_error() 	            Returns an error code indicating the reason that the most                                         recent regular expression call failed

    4.  preg_match() 	                Finds the first match of a pattern in a string

    5.  preg_match_all() 	            Finds all matches of a pattern in a string

    6.  preg_replace() 	                Returns a string where matches of a pattern (or an array of                                       patterns) are replaced with a substring (or an array of                                           substrings) in a given string

    7.  preg_replace_callback() 	    Given an expression and a callback, returns a string where                                        all matches of the expression are replaced with the substring                                     returned by the callback
    
    8.  preg_replace_callback_array() 	Given an array associating expressions with callbacks,                                            returns a string where all matches of each expression are                                         replaced with the substring returned by the callback
    
    9.  preg_split() 	                Breaks a string into an array using matches of a regular                                          expression as separators

    10. preg_quote() 	                Escapes characters that have a special meaning in regular                                         expressions by putting a backslash in front of them