<?php

mysql_connect('localhost','root','');
mysql_select_db('lms');

class Books
{

    private $title;
    private $author;
    private $publisher;
    private $year;
    private $edition;
    private $summary;
    private $ISBN;
    private $pages;
    private $category;
    private $weblink;
    private $id;



public function setId($id)
{
    $this->id = $id;
}

public function getId()
{
    return $this->id;
}



    public function setCategory($category)
    {
        $this->category = $category;
    }


    public function getCategory()
    {
        return $this->category;
    }







    public function setISBN($ISBN)
    {
        $this->ISBN = $ISBN;
    }


    public function setYear($year)
    {
        $this->year = $year;
    }


    public function setWeblink($weblink)
    {
        $this->weblink = $weblink;
    }


    public function setTitle($title)
    {
        $this->title = $title;
    }


    public function setSummary($summary)
    {
        $this->summary = $summary;
    }


    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }


    public function setPages($pages)
    {
        $this->pages = $pages;
    }


    public function setEdition($edition)
    {
        $this->edition = $edition;
    }


    public function setAuthor($author)
    {
        $this->author = $author;
    }


    public function getISBN()
    {
        return $this->ISBN;
    }


    public function getAuthor()
    {
        return $this->author;
    }


    public function getEdition()
    {
        return $this->edition;
    }


    public function getPages()
    {
        return $this->pages;
    }


    public function getPublisher()
    {
        return $this->publisher;
    }


    public function getSummary()
    {
        return $this->summary;
    }

    public function getTitle()
    {
        return $this->title;
    }


    public function getWeblink()
    {
        return $this->weblink;
    }


    public function getYear()
    {
        return $this->year;
    }


    function bookList(){


        $query = "SELECT *  FROM `book` WHERE category='$this->category'";
        $result = mysql_query($query);
        return $result;


    }

    function allBook(){

        $query = "SELECT *  FROM `book`";
        $result = mysql_query($query);
        return $result;

    }



    function updateBooks(){

        $query = "UPDATE `book` SET
       `Author`='$this->author',
        `Publisher`='$this->publisher',`Year`='$this->year',
        `Edition`='$this->edition',`summary`='$this->summary',
        `ISBN`='$this->ISBN',`pages`='$this->pages',
        `weblink`='$this->weblink',
        `title`='$this->title',
        `category`='$this->category' WHERE `book_id`='$this->id'";

       
        $result = mysql_query($query);
        return $result;

    }

    function editFetch(){

        $query = "select * from book where `book_id`=$this->id";
        $result = mysql_query($query);


        return $result;


    }



    function addBooks() {

        $query1 = "select * from  book where title='$this->title' OR `ISBN`='$this->ISBN'";


          $result = mysql_query($query1);
          $num = mysql_num_rows($result);


        if ($num > 0) {

           return false;

        }

        else {

            $query = "
      INSERT INTO `Book`(`Author`, `Publisher`, `Year`, `Edition`, `summary`, `ISBN`, `pages`, `weblink`, `title`, `category`) VALUES
      ('$this->author','$this->publisher','$this->year','$this->edition','$this->summary','$this->ISBN','$this->pages','$this->weblink','$this->title','$this->category'
      )
      ";


        return mysql_query($query);


        }


    }




    function deleteBook($id){
        var_dump($this->id);
        $query = "DELETE FROM book WHERE book_id=".$this->id;
        
        $result = mysql_query($query);
        return $result;

    }


    function checkISBN(){

        $query="select * from book where `title`='$this->title' AND  `ISBN`='$this->ISBN'";

        $result = mysql_query($query);
        $num = mysql_num_rows($result);


        if ($num > 0) {

            return true;

        }


        else{

            return false;

        }


    }



}