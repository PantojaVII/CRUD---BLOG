<?php

class Artigo
{

    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }


    public function exibirTodos(): array
    {
        $result = $this->mysql->query('select * from artigos');
        $artigos = $result->fetch_all(MYSQLI_ASSOC);
        return $artigos;
    }
    public function exibirArtigo(String $id): array
    {
        $result = $this->mysql->prepare("select * from artigos where id = ?");
        $result->bind_param('s', $id);
        $result->execute();
        $artigo = $result->get_result()->fetch_assoc();
        return $artigo;
    }
}
