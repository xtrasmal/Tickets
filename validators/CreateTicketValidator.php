<?php namespace Modules\Tickets\Validators;

use Illuminate\Validation\Factory;
use Modules\Tickets\Cases\Tickets\CreateTicketRequest;
use Ill\Core\CommandBus\Exceptions\CommandValidationFailedException;

class CreateTicketValidator
{
    private $validationFactory;

    public function __construct(Factory $validationFactory)
    {

        $this->validationFactory = $validationFactory;

    }

    public function validate(CreateTicketRequest $command)
    {

        $validator = $this->validationFactory->make(
            [
                'description' => $command->description,
            ],
            [
                'description' => 'required',
            ]
        );

        if ($validator->fails()) {
            throw new CommandValidationFailedException($validator->messages()->toJson());
        }

    }
}
