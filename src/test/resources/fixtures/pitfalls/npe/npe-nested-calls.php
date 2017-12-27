<?php

class CasesHolder
{
    private function consumer(DateTime $dateTime): void {}

    public function scenario(): void
    {
        $this->consumer(<warning descr="Null pointer exception may occur here (result can be null).">$this->triggerCorrectPhpDoc()</warning>);
        $this->consumer(<warning descr="Null pointer exception may occur here (result can be null).">$this->triggerMessedPhpDoc()</warning>);
        $this->consumer(<warning descr="Null pointer exception may occur here (result can be null).">$this->triggerNoPhpDoc()</warning>);
        $this->consumer(<warning descr="Null pointer exception may occur here (result can be null).">null</warning>);
    }

    /** @return DateTime|null */
    private function triggerCorrectPhpDoc(): ?DateTime {}

    /** @return DateTime|false */
    private function triggerMessedPhpDoc(): ?DateTime {}

    private function triggerNoPhpDoc(): ?DateTime {}
}