<?php namespace App\Modules\Tickets\Validators;

use Ill\Core\CommandBus\Exceptions\CommandValidationFailedException;
use Illuminate\Validation\Factory;
use App\Modules\Tickets\Cases\Tickets\CreateTicketRequest;

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
