<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function login()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://test.ferisoftdemo.com/api/login?password=test_password_123?&email=admin@ferisoft.com',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
      }

      public function products()
      {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://test.ferisoftdemo.com/api/product',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQxZTA3ODE5OTZkY2E2ODA2YmY5MzhjNGFlNGRjN2YwZjVhMzhlNTQ2MWY4OTg0MTM5ZWI1M2VmNjBiZjNjZDJlYmZjMmI2YjE0ZmNiNjQiLCJpYXQiOjE2NzE5NjcyODguOTI3NDcsIm5iZiI6MTY3MTk2NzI4OC45Mjc0NzQsImV4cCI6MTcwMzUwMzI4OC45MjMxMzMsInN1YiI6IkZFUklTT0ZULTYzYTgyZGI3NDUzOWQ2M2E4MmRiNzQ1MzlmIiwic2NvcGVzIjpbXX0.Xmv8wrbd87gnMMHW8UqQIjNMZ2_G29jHd2blWwxa6u3rIULJ3BSdgcfUG9EpPvC7DbN7ySFc_4v0UskpNZz4aQ1ckniB1MDB7YZvAfRbFGE-cuEn35JkAU2-M_yBjaz45Z6Iq9rFjfEmNChNkPwGoe3ev8yQC0XT8LPYLq4tv9Z2gxmyQIQIDgCB8QdyRq_BerGUvuh_5UwAjvRRp29oe3xqgcNNbPJCwzwhJgLLf4dbuC1QvgPGXxsq5N-zyljB-OBjQrYG7hu_7YfqfOFCt8e83LdAE9IeJ99AWqs9CFeQ7eImXKS9F_qSnfv-u2C90hwxXmGQl0NQja2jUN4westN-ZAojJFrVfV9aMu0lxdi3YxtIOroZPW3YQNrj3z0vULaklQCJZljQSbcniTxdVMkuuMnAdiqUQRBaa8oUYnv-IpduhVi_MtuRiL-cGMk7jht8yxucslhCaKm60T5ZNIZDf352w0yW4KoRqn9QG96bPuO4WOgB3wcDCI251ypZOy-Q8l5-pDi3BGMNiZV_Nmh4osXaW8sWk8h4TRVL0ylaSbFDxNuupncWdxyRB62GbVwlnaecsvFhEdoakrtEMKCGwoVyHp1nJzXi3rbBXulrH43rVQG4M8LDHiAy4lwqge15lwxxKVkinBNHOjGedVJ7bpxkp-MjmYeQimASMM'
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
       // echo $response;
       $temp_arr = json_decode($response);
       return view("api_products",compact("temp_arr"));
      }

      public function categories()
      {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://test.ferisoftdemo.com/api/category',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNzE4Y2Y3MmYxZTZkMzc3ZTMzMzQzMzRhNmQ5YmNmZGZlNGQxYzI0ZjIyNDYyNzYyMDg2MWMyYzMxODZmYzBmOWRmYzUyNGY1ZmIyMjViNWYiLCJpYXQiOjE2NzM4NTE2MTkuOTk2NDIxLCJuYmYiOjE2NzM4NTE2MTkuOTk2NDI1LCJleHAiOjE3MDUzODc2MTkuOTkwODc4LCJzdWIiOiJGRVJJU09GVC02M2E4MmRiNzQ1MzlkNjNhODJkYjc0NTM5ZiIsInNjb3BlcyI6W119.pYhziGDwAPmDBIWthDSyvPcae7fCk-3RkK7OQoyQ9WSWfoMaHJ-sm1K8WLfEm9COtY5ecba4X9c5dA49Lf1NWQ8jkQVHVIqnx1lyFoK93tHMX4G2gAhlSTCpFlAqKVD6j-YzLDm3zO7-d-NacjyASMycxyuHE9PG4Gf7Wj5Q7WoR_e065WgNftD5DRX33auaB72Nx2dsMhT1_-Sehd8hcjvfYDz_bxVHCcawH6uRm1PEpihkUWaiDPlIqSa8xHm8urNrVd2yBobcvl6ScMjk8hqROTCukqSSh_Lf4QvZWjN-FjyCQGCqcB4e7D6IaU6e99471o5dRvQxVwD7KemLJvm-hQofzMd65O11jwCVkfK6v-VHd-Kj58KQ6JtRSA0r6srIhFQhdMW18s_IyIExXS53owY-qqYysvVGJJ5o_N9BmPAyc2iFSlCjdxKqseo44_Jyxzshr-UozA8NK2o5x7w3Uh0gAK30Qo2uEz-42W1r6Tgyov25SUw0yLFtAHCURLlR20UIJSWydvFGUN7bczQ5Tv-5KZmF2g1pmY2M0x7d1c_XKBXVJ65Odo3_oDgA6MZmJTiBfH6CwS4j82KUQJaOIzVLCLg3c7NUKukQ6GvVdzaHnSrCHzF8VzeEV0SrUfs7U7_AeL62egugQFf8mC9r0RwOlNcfm8PxS4mIc4Y'
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        //echo $response;
        $temp_arr = json_decode($response);
        return view("api_categories",compact("temp_arr"));
      }
}
