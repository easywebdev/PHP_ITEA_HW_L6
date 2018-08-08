<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 08.08.18
 * Time: 8:59
 */

namespace App\Http\Models;

use Illuminate\Support\Facades\DB;

/**
 * Class MUsers
 * @package App\Http\Models
 */
class MUsers
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function selectUsers()
    {
        return DB::table('users')->get();
    }

    /**
     * @param int $id
     * @return \Illuminate\Support\Collection
     */
    public function selectUser(int $id)
    {
        return DB::table('users')->select('name', 'age', 'job')->where('id', '=', $id)->get();
    }

    /**
     * @param array $post
     */
    public function insertUser(array $post)
    {
        DB::table('users')->insert(
            ['name' => $post['name'], 'age' => $post['age'], 'job' => $post['job']]
        );
    }

    /**
     * @param array $post
     * @param int $id
     */
    public function updateUser(array $post, int $id)
    {
        DB::table('users')->where('id', $id)->update(
            ['name' => $post['name'], 'age' => $post['age'], 'job' => $post['job']]
        );
    }

    /**
     * @param int $id
     */
    public function delUser(int $id)
    {
        DB::table('users')->where('id', '=', $id)->delete();
    }
}