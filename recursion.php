Simulate how a library’s book categories are organized into folders.

Example PHP Structure:

$library = [
    "Fiction" => [
        "Fantasy" => ["Harry Potter", "The Hobbit"],
        "Mystery" => ["Sherlock Holmes", "Gone Girl"]
    ],
    "Non-Fiction" => [
        "Science" => ["A Brief History of Time", "The Selfish Gene"],
        "Biography" => ["Steve Jobs", "Becoming"]
    ]
];

function displayLibrary($library, $indent = 0) {
    foreach ($library as $category => $items) {
        echo str_repeat("&nbsp;", $indent * 4) . "$category<br>";
        if (is_array($items)) {
            displayLibrary($items, $indent + 1);
        } else {
            echo str_repeat("&nbsp;", ($indent + 1) * 4) . "- $items<br>";
        }
    }
}

displayLibrary($library);


Expected Output:

Fiction
    Fantasy
        Harry Potter
        The Hobbit
    Mystery
        Sherlock Holmes
        Gone Girl
Non-Fiction
    Science
        A Brief History of Time
        The Selfish Gene
    Biography
        Steve Jobs
        Becoming
