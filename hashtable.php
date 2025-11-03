Task:
Store book information (author, year, genre) using associative arrays.

Example:

$bookInfo = [
    "Harry Potter" => ["author" => "J.K. Rowling", "year" => 1997, "genre" => "Fantasy"],
    "The Hobbit" => ["author" => "J.R.R. Tolkien", "year" => 1937, "genre" => "Fantasy"]
];

function getBookInfo($title, $bookInfo) {
    if (array_key_exists($title, $bookInfo)) {
        $info = $bookInfo[$title];
        echo "Title: $title<br>";
        echo "Author: " . $info['author'] . "<br>";
        echo "Year: " . $info['year'] . "<br>";
        echo "Genre: " . $info['genre'] . "<br>";
    } else {
        echo "Book not found.";
    }
}

getBookInfo("Harry Potter", $bookInfo);


Expected Output:

Title: Harry Potter
Author: J.K. Rowling
Year: 1997
Genre: Fantasy
