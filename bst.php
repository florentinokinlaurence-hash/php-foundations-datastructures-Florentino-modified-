Task:
Implement a Binary Search Tree (BST) to store and search books alphabetically.

Example:

class Node {
    public $data;
    public $left;
    public $right;
    public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

class BinarySearchTree {
    public $root;
    public function __construct() {
        $this->root = null;
    }

    public function insert($data) {
        $this->root = $this->_insert($this->root, $data);
    }

    private function _insert($node, $data) {
        if ($node === null) return new Node($data);
        if ($data < $node->data)
            $node->left = $this->_insert($node->left, $data);
        else
            $node->right = $this->_insert($node->right, $data);
        return $node;
    }

    public function inorderTraversal($node) {
        if ($node !== null) {
            $this->inorderTraversal($node->left);
            echo $node->data . "<br>";
            $this->inorderTraversal($node->right);
        }
    }

    public function search($data) {
        return $this->_search($this->root, $data);
    }

    private function _search($node, $data) {
        if ($node === null) return false;
        if ($data == $node->data) return true;
        if ($data < $node->data)
            return $this->_search($node->left, $data);
        else
            return $this->_search($node->right, $data);
    }
}

$bst = new BinarySearchTree();
$books = ["Harry Potter", "Gone Girl", "The Hobbit", "Becoming"];
foreach ($books as $title) {
    $bst->insert($title);
}

echo "<strong>Inorder Traversal:</strong><br>";
$bst->inorderTraversal($bst->root);

$searchTitle = "Gone Girl";
echo "<br><br>Searching for '$searchTitle':<br>";
echo $bst->search($searchTitle) ? "Book found!" : "Book not found.";


Expected Output:

Inorder Traversal:
Becoming
Gone Girl
Harry Potter
The Hobbit

Searching for 'Gone Girl':
Book found!
