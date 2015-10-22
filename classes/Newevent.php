<?php

/**
 * Class registration
 * handles the user registration
 */
class Newevent
{
    /**
     * @var object $db_connection The database connection
     */
    private $db_connection = null;
    /**
     * @var array $errors Collection of error messages
     */
    public $errors = array();
    /**
     * @var array $messages Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$registration = new Registration();"
     */
    public function __construct()
    {
        if (isset($_POST["newevent"])) {
            $this->addNewEvent();
        }
    }

    /**
     * handles the entire registration process. checks all error possibilities
     * and creates a new user in the database if everything is fine
     */
    private function addNewEvent()
    {
        if (empty($_POST['event_name'])) {
            $this->errors[] = "Empty Event Name";
        } elseif (empty($_POST['location'])) {
            $this->errors[] = "Empty Location";
        } elseif (empty($_POST['start_date'])) {
            $this->errors[] = "Please enter a start date";
        } elseif (!empty($_POST['event_name'])
            && !empty($_POST['location'])
            && !empty($_POST['start_date'])
        ) {
            // create a database connection
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {

                // write event info into databse
                $sql = "INSERT INTO events (event_name, location, start_date)
                        VALUES('" . $event_name . "', '" . $location . "', '" . $start_date . "');";
                $query_new_event_insert = $this->db_connection->query($sql);

                // if user has been added successfully
                if ($query_new_event_insert) {
                    echo "data inserted";
                    // include('./views/template/head.php');
                    // include('./views/template/nav.php');
                    // include('./views/welcome.php');
               
                } else {
                    $this->errors[] = "Sorry, we weren't able to get that";
                }
            }
            } else {
                $this->errors[] = "Sorry, no database connection.";
            }
        } else {
            $this->errors[] = "An unknown error occurred.";
        }
    }
}