<?php

namespace dcbs\PhauxData;

class ModelMaker
{
	public function getInstance($model_name)
	{
		return new $model_name;
	}
}
