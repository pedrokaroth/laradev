<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class UserController
 * @package LaraDev\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * @return string
     */
    public function index(): string
    {
        return "<h1>Listagem do usuario com codigo 1 </h1>";
    }

    /**
     * @param Request $request
     * @return string
     */
    public function getData(Request $request): string
    {
        var_dump($request);
        return "<h1>Disparou a acao de GET</h1>";
    }

    /**
     * @param Request $request
     * @return string
     */
    public function postData(Request $request): string
    {
        var_dump($request);
        return "<h1>Disparou a acao de POST</h1>";
    }

    public function testePut(Request $request): string
    {
        var_dump($request);
        return "<h1>Disparou a ação PUT</h1>";
    }

    public function testePatch(Request $request): string
    {
        var_dump($request);
        return "<h1>Disparou a ação PATCH</h1>";
    }

    public function testeMatch(Request $request): string
    {
        var_dump($request);
        return "<h1>Disparou a ação MATH</h1>";
    }
}
