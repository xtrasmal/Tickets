<?php namespace Modules\Tickets\Validators;

use Illuminate\Validation\Factory;
use Modules\Tickets\Cases\Tickets\UpdateTicketRequest;
use Ill\Core\CommandBus\Exceptions\CommandValidationFailedException;

class UpdateTicketValidator
{
    private $validationFactory;

    public function __construct(Factory $validationFactory)
    {

        $this->validationFactory = $validationFactory;

    }

    public function validate(UpdateTicketRequest $command)
    {

        $validator = $this->validationFactory->make(
            [
                'id' => $command->description,
            ],
            [
                'id' => 'required',
            ]
        );

        if ($validator->fails()) {
            throw new CommandValidationFailedException($validator->messages()->toJson());
        }

    }
}
