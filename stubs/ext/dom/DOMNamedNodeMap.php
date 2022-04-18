<?php 

class DOMNamedNodeMap implements \IteratorAggregate, \Countable
{
    /**
     * @tentative-return-type
     * @return (DOMNode | null)
     */
    public function getNamedItem(string $qualifiedName)
    {
    }
    // TODO DOM spec returns DOMAttr
    /**
     * @tentative-return-type
     * @return (DOMNode | null)
     */
    public function getNamedItemNS(?string $namespace, string $localName)
    {
    }
    // TODO DOM spec returns DOMAttr
    /**
     * @tentative-return-type
     * @return (DOMNode | null)
     */
    public function item(int $index)
    {
    }
    // TODO DOM spec returns DOMAttr
    /**
     * @tentative-return-type
     * @return (int | false)
     */
    public function count()
    {
    }
    public function getIterator() : Iterator
    {
    }
}