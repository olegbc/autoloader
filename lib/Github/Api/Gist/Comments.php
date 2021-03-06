<?php

namespace lib\Github\Api\Gist;

use lib\Github\Api\AbstractApi;

/**
 * @link   https://developer.github.com/v3/gists/comments/
 * @author Kayla Daniels <kayladnls@gmail.com>
 */
class Comments extends AbstractApi
{
    /**
     * Get all comments for a gist.
     *
     * @param string $gist
     *
     * @return array
     */
    public function all($gist)
    {
        return $this->get('/gists/'.rawurlencode($gist).'/comments');
    }

    /**
     * Get a comment of a gist.
     *
     * @param string $gist
     * @param int    $comment
     *
     * @return array
     */
    public function show($gist, $comment)
    {
        return $this->get('/gists/'.rawurlencode($gist).'/comments/'.rawurlencode($comment));
    }

    /**
     * Create a comment for gist.
     *
     * @param string $gist
     * @param string $body
     *
     * @return array
     */
    public function create($gist, $body)
    {
        return $this->post('/gists/'.rawurlencode($gist).'/comments', array('body' => $body));
    }

    /**
     * Create a comment for a gist.
     *
     * @param string $gist
     * @param int    $comment_id
     * @param string $body
     *
     * @return array
     */
    public function update($gist, $comment_id, $body)
    {
        return $this->patch('/gists/'.rawurlencode($gist).'/comments/'.rawurlencode($comment_id), array('body' => $body));
    }

    /**
     * Delete a comment for a gist.
     *
     * @param string $gist
     * @param int    $comment
     *
     * @return array
     */
    public function remove($gist, $comment)
    {
        return $this->delete('/gists/'.rawurlencode($gist).'/comments/'.rawurlencode($comment));
    }
}
