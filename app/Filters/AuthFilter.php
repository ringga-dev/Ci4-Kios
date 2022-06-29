<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param RequestInterface $request
     * @param array|null       $arguments
     *
     * @return mixed
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('logged_in') != true) {
            $data = ['stts' => false, 'msg' => 'lakukan login terlebih dahulu...!'];
            session()->setFlashdata('pesan', $data);
            return redirect()->to(base_url('auth/login'));
        }
    }


    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //kondisi
        if (session()->get('logged_in') == true) {
            return redirect()->to(base_url('AdminControl'));
        }
    }
}
