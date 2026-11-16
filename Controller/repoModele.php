<?php
if (!class_exists('RepoController')) {
    class RepoController
    {
        private $id;
        private $feedback_id;
        private $response_text;

        public function __construct($id = null, $feedback_id = null, $response_text = null)
        {
            $this->id = $id;
            $this->setFeedback_id($feedback_id);
            $this->setResponse_text($response_text);
        }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getFeedback_id()
    {
        return $this->feedback_id;
    }

    public function setFeedback_id($feedback_id)
    {
        // Add validation logic here if needed
        $this->feedback_id = $feedback_id;
        return $this;
    }

    public function getResponse_text()
    {
        return $this->response_text;
    }

    public function setResponse_text($response_text)
    {
        // Add validation logic here if needed
        $this->response_text = $response_text;
        return $this;
    }
}
}
?>