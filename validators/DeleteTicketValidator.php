<?php namespace App\Modules\Tickets\Validators;

use Illuminate\Validation\Factory;
use App\Modules\Tickets\Cases\Tickets\DeleteTicketRequest;
use Ill\Core\CommandBus\Exceptions\CommandValidationFailedException;

class DeleteTicketValidator
{
    private $validationFactory;

    public function __construct(Factory $validationFactory)
    {

        $this->validationFactory = $validationFactory;

    }

    public function validate(DeleteTicketRequest $command)
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
