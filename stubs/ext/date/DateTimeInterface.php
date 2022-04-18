<?php 

interface DateTimeInterface
{
    /**
     * @tentative-return-type
     * @return string
     */
    public function format(string $format);
    /**
     * @tentative-return-type
     * @return (DateTimeZone | false)
     */
    public function getTimezone();
    /**
     * @tentative-return-type
     * @return int
     */
    public function getOffset();
    /**
     * @tentative-return-type
     * @return (int | false)
     */
    public function getTimestamp();
    /**
     * @tentative-return-type
     * @return (DateInterval | false)
     */
    public function diff(DateTimeInterface $targetObject, bool $absolute = false);
    /**
     * @tentative-return-type
     * @return void
     */
    public function __wakeup();
}