<?php


class Pager
{
    private $totalPages;
    private $recordsPerPage;

    public function __construct (int $totalPages, int $recordsPerPage, string $pageLinkTemplate)
    {
        $this->totalPages = $totalPages;
        $this->recordsPerPage = $recordsPerPage;
    }

    public function getTotalPages () : int
    {
        return $this->totalPages;
    }

    public function getLinkForPage (int $pageNumber) : int
    {

    }

}