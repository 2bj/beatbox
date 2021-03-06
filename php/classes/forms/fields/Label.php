<?hh

class :bb:form:label extends :bb:form:field {
	attribute
		:label,
		:bb:form:field for @required;

	protected function buildField() : :label {
		$for = $this->getAttribute('for');
		assert($for instanceof :bb:form:field);
		$root = <label for={$for->getID()} />;
		$root->appendChild($this->getChildren());
		return $root;
	}

	public function setValue(mixed $value) : :bb:form:label {
		// nop
		return $this;
	}

	public function getValue() : mixed {
		return null;
	}

	// a label is always valid
	public function validate() : array {
		return [true, null];
	}
}
