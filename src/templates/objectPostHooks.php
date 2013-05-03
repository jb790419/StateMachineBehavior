if (is_callable(array($this, $this->state_machine_post_hook)))
{
    call_user_func(array($this, $this->state_machine_post_hook), $con);
}
