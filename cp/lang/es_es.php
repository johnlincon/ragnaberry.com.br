<?php
// Translation by: jaBote
// Revised by: -
// Translator Notes:
// This is a Spanish/Spain translation. However, my efforts were towards the most neutral 
// translation I've been able to achieve.
// In case of dispute or suggestions about this translation, please contact me (jaBote in Hercules 
// forums), you can use Spanish if you want.
// Also, please avoid disrespectful destructive criticism towards this translation. I've used a 
// translation criteria that should fit most Spanish-speaking servers. Expect translations of some 
// RO slang to Spanish when possible but don't expect any forced overzealous mindless translations 
// where it simply won't fit. Arbitrary? Maybe. Results? Better than mindlessly translating everything.
// Example: storage -> almacén ? No! That'd require scripts to be translated for that!
// Example: ban -> expulsión ? Yes! No scripts to be translated and it's widely understood!
//          ip ban -> IP con acceso prohibido ?
 
return array(	
	// Generic/Misc.
	'YesLabel'                => 'Sí',
	'NoLabel'                 => 'No',
	'NoteLabel'               => 'Nota',
	'GenderTypeMale'          => 'Hombre',
	'GenderTypeFemale'        => 'Mujer',
	'GenderTypeServer'        => 'Servidor',
	'RefreshSecurityCode'     => 'Actualizar Código de Seguridad',
	'NoneLabel'               => 'Ninguno',
	'NeverLabel'              => 'Nunca',
	'NotApplicableLabel'      => 'No Aplicable',
	'UnknownLabel'            => 'Desconocido',
	'IsEqualToLabel'          => 'es igual que',
	'IsGreaterThanLabel'      => 'es mayor que',
	'IsLessThanLabel'         => 'es menor que',
	'AllLabel'                => 'Todo',
	'SearchLabel'             => 'Buscar…',
	'GoBackLabel'             => 'Volver a la página anterior…',
	'SearchButton'            => 'Buscar',
	'ResetButton'             => 'Reiniciar',
	'FilterButton'            => 'Filtrar',
	'NotAcceptingDonations'   => "En estos momentos no aceptamos donaciones. Disculpa las molestias.",
	//'NotAcceptingDonations'   => "We're sorry, but our donation system is currently undergoing maintenance, please try again later.",
	'FoundSearchResults'      => 'Se han encontrado un total de %d registro(s) en %d página(s).  Mostrando el/los resultado(s) %d-%d.',
	'LoginToDonate'           => 'Por favor, inicia sesión para hacer donaciones.',
	'UnknownCharacter'        => 'No se ha encontrado el personaje.',
	'AccountIdLabel'          => 'ID de Cuenta',
	'AccountGroupIDLabel'     => 'ID de Grupo',
	'AccountStateLabel'       => 'Estado de la Cuenta',
	'CreditBalanceLabel'      => 'Balance de Crédito',
	'UsernameLabel'           => 'Nombre de Usuario',
	'PasswordLabel'           => 'Contraseña',
	'EmailAddressLabel'       => 'Correo Electrónico',
	'GenderLabel'             => 'Sexo',
	'LoginCountLabel'         => 'Número de Conexiones',
	'LastLoginDateLabel'      => 'Fecha de la Última Conexión',
	'LastUsedIpLabel'         => 'Última IP Usada',
	'AccountStateNormal'      => 'Normal',
	'AccountStatePending'     => 'Pendiente',
	'AccountStatePermBanned'  => 'Expulsado Permanentemente',
	'AccountStateTempBanLbl'  => 'Expulsado Temporalmente',
	'AccountStateTempBanned'  => 'Expulsión Temp. (hasta: %s)',
	'OnlineLabel'             => 'Online',
	'OfflineLabel'            => 'Offline',
	'ItemIdLabel'             => 'ID del Objeto',
	'ItemNameLabel'           => 'Nombre del Objeto',
	'ItemAmountLabel'         => 'Cantidad',
	'ItemIdentifyLabel'       => 'Identificado',
	'ItemRefineLabel'         => 'Refinado',
	'ItemBrokenLabel'         => 'Roto',
	'ItemCard0Label'          => 'Carta 0',
	'ItemCard1Label'          => 'Carta 1',
	'ItemCard2Label'          => 'Carta 2',
	'ItemCard3Label'          => 'Carta 3',

	// Security
	'SecuritySessionInvalid'  => 'Lo sentimos, pero tu tiempo de sesión ha expirado. Inténtalo de nuevo.',
	'SecurityNeedSession'     => 'Lo sentimos, pero no se ha encontrado la sesión del formulario (¿intento de hack?)',
	'SecurityNeedToken'       => 'Lo sentimos, pero no se ha encontrado la identificación del formulario (¿intento de hack?)',

	// Module: account
	// - account/changemail
	'EmailChangeTitle'        => 'Cambiar Correo Electrónico',
	'EnterEmailAddress'       => 'Introduce una dirección de correo electrónico.',
	'EmailCannotBeSame'       => 'Tu nuevo correo electrónico no puede ser el mismo que el actual.',
	'EmailInvalid'            => 'Dirección de correo electrónico no válida.',
	'EmailAlreadyRegistered'  => "El correo electrónico especificado ya pertenece a otra cuenta.",
	'EmailChangeSent'         => 'Se ha enviado un correo electrónico a la nueva dirección, con un enlace para confirmar el cambio.',
	'EmailAddressChanged'     => '¡Se ha cambiado tu dirección de correo electrónico!',
	'EmailChangeFailed'       => 'No se pudo cambiar la dirección de correo electrónico. Inténtalo de nuevo más tarde.',
	'EmailChangeHeading'      => 'Cambiar correo electrónico',
	'EmailChangeInfo'         => 'Si quieres cambiar la dirección de correo electrónico registrada en tu cuenta, debes rellenar el formulario de abajo.',
	'EmailChangeInfo2'        => 'Tras enviar el formulario, se requerirá que confirmes tu nuevo correo electrónico (se enviará un correo electrónico a la nueva dirección con un enlace).',
	'EmailChangeLabel'        => 'Dirección de Correo Electrónico nueva',
	'EmailChangeInputNote'    => '¡Debe ser una dirección de correo electrónico correcta!!',
	'EmailChangeButton'       => 'Cambiar Dirección de Correo Electrónico',
	// - account/changepass
	'PasswordChangeTitle'     => 'Cambiar Contraseña',
	'NeedCurrentPassword'     => 'Introduce tu contraseña actual.',
	'NeedNewPassword'         => 'Introduce tu nueva contraseña.',
	'OldPasswordInvalid'      => "La contraseña introducida no coincide con la que tenemos guardada.",
	'ConfirmNewPassword'      => 'Confirma tu nueva contraseña.',
	'NewPasswordHasUsername'  => 'Tu nueva contraseña no debe contener tu nombre de usuario.',
	'NewPasswordInvalid'      => 'Tu nueva contraseña contiene caracteres no válidos.',
	'NewPasswordSameAsOld'    => 'La nueva contraseña no puede ser la misma que tu contraseña actual.',
	'NewPasswordNeedUpper'    => 'Tu nueva contraseña debe tener al menos %d letra(s) mayúscula(s).',
	'NewPasswordNeedLower'    => 'Tu nueva contraseña debe tener al menos %d letra(s) minúscula(s).',
	'NewPasswordNeedNumber'   => 'Tu nueva contraseña debe tener al menos %d número(s).',
	'NewPasswordNeedSymbol'   => 'Tu nueva contraseña debe tener al menos %d símbolo(s).',
	'PasswordHasBeenChanged'  => 'Se ha cambiado tu contraseña. Por favor, identifícate de nuevo.',
	'FailedToChangePassword'  => 'No se pudo cambiar tu contraseña. Por favor, contacta con un administrador.',
	'PasswordChangeHeading'   => 'Cambiar Contraseña',
	'PasswordChangeInfo'      => 'Por favor, introduce tu contraseña actual, después la nueva contraseña que desees usar y vuélvela a introducir para confirmarla.',
	'CurrentPasswordLabel'    => 'Contraseña Actual',
	'NewPasswordLabel'        => 'Nueva Contraseña',
	'NewPasswordConfirmLabel' => 'Vuelve a introducir la Nueva Contraseña',
	'PasswordChangeNote'      => 'Asegúrate de introducir información correcta.',
	'PasswordChangeNote2'     => 'Tras cambiar tu contraseña, serás deslogueado.',
	'PasswordChangeButton'    => 'Cambiar Contraseña',
	// - account/changesex
	'GenderChangeTitle'       => 'Cambiar Sexo',
	'GenderChangeBadChars'    => 'No puedes cambiar de sexo si alguno de tus personajes es: %s',
	'GenderChanged'           => 'Se ha cambiado tu sexo. Además, se han deducido %d crédito(s) de tu cuenta.',
	'GenderChangedForFree'    => 'Se ha cambiado tu sexo.',
	'GenderChangeHeading'     => 'Cambiar Sexo',
	'GenderChangeCost'        => 'Los cambios de sexo cuestan %s crédito(s).',
	'GenderChangeBalance'     => 'Tu balance actual es de %s crédito(s).',
	'GenderChangeNoFunds'     => 'No tienes suficientes créditos para cambiar de sexo en estos momentos.',
	'GenderChangeNoCost'      => 'Los cambios de sexo son gratis para ti.',
	'GenderChangeCharInfo'    => 'No puedes cambiar de sexo si alguno de tus personajes es: %s',
	'GenderChangeSubHeading'  => '¡Asegúrate de que realmente quieres cambiar de sexo!',
	'GenderChangeFormText'    => '¿Quieres cambiar tu sexo a %s?',
	'GenderChangeConfirm'     => '¿Estás totalmente seguro de que quieres cambiar de sexo?',
	'GenderChangeButton'      => 'Sí, seguro.',
	// - account/confirm
	'AccountConfirmTitle'     => 'Confirma la Cuenta',
	'AccountConfirmUnban'     => 'Se ha confirmado y activado la cuenta.',
	'AccountConfirmMessage'   => 'Tu cuenta ha sido confirmada y activada. Ya puedes iniciar sesión.',
	// - account/confirmemail
	'EmailConfirmTitle'       => 'Confirmar Correo Electrónico',
	'EmailConfirmFailed'      => 'Ha habido un problema técnico al cambiar tu dirección de correo electrónico. Por favor, contacta con un administrador.',
	'EmailConfirmChanged'     => '¡Se ha cambiado tu dirección de correo electrónico!',
	// - account/create
	'AccountCreateTitle'      => 'Crear Cuenta',
	'AccountConfirmBan'       => 'Esperando activación de la cuenta: %s',
	'AccountCreateEmailSent'  => 'Se ha enviado un correo electrónico con detalles para la activación de tu cuenta. Por favor, comprueba tu correo electrónico y activa tu cuenta para iniciar sesión.',
	'AccountCreateFailed'     => 'Se ha creado tu cuenta, pero no hemos podido enviarte un correo electrónico debido a problemas técnicos. Por favor, contacta con algún miembro del equipo del servidor y pide ayuda.',
	'AccountCreated'          => 'Enhorabuena, te has registrado con éxito y logueado automáticamente.',
	'AccountCreateHeading'    => 'Registrarse',
	'AccountCreateTerms'      => 'Términos del Servicio',
	'AccountCreateInfo'       => 'Por favor, lee nuestros %s antes de registrar una cuenta para asegurarte de entender las normas de tener una cuenta en nuestro servidor privado de Ragnarok Online.',
	'AccountCreateInfo2'      => 'Al hacer click en "Crear Cuenta", estarás de acuerdo en someterte a nuestros %s.',
	'AccountCreateGenderInfo' => "¡El sexo que escojas aquí afectará al sexo de tus personajes en el juego!",
	'AccountServerLabel'      => 'Servidor',
	'AccountUsernameLabel'    => 'Tu Nombre de Usuario',
	'AccountPasswordLabel'    => 'Tu Contraseña',
	'AccountPassConfirmLabel' => 'Confirmar Contraseña',
	'AccountEmailLabel'       => 'Dirección de Correo Electrónico',
	'AccountGenderLabel'      => 'Sexo',
	'AccountBirthdateLabel'   => 'Fecha de Cumpleaños',
	'AccountSecurityLabel'    => 'Código de Seguridad',
	'AccountCreateButton'     => 'Crear Cuenta',
	'AccountInvalidChars'     => "El nombre de usuario solo puede contener los siguientes caracteres: '%s'",
	'InvalidLoginServer'      => 'Has seleccionado un login server no válido. Inténtalo de nuevo seleccionando un servidor válido.',
	'InvalidLoginCredentials' => 'Las credenciales introducidas no son válidas. Asegúrate de haber escrito la información correcta e inténtalo de nuevo.',
	'UnexpectedLoginError'    => 'Ha ocurrido un fallo inesperado. Inténtalo de nuevo o contacta con un administrador.',
	'CriticalLoginError'      => 'Ha ocurrido algo malo. Contacta con un administrador cuanto antes.',
	'UsernameAlreadyTaken'    => "El nombre de usuario que has escogido ya ha sido tomado por otro usuario.",
	'UsernameTooShort'        => sprintf('Tu nombre de usuario debe tener entre %d y %d caracteres.', Flux::config('MinUsernameLength'), Flux::config('MaxUsernameLength')),
	'UsernameTooLong'         => sprintf('Tu nombre de usuario debe tener entre %d y %d caracteres.', Flux::config('MinUsernameLength'), Flux::config('MaxUsernameLength')),
	'PasswordContainsUser'    => 'Tu contraseña no puede contener tu nombre de usuario.',
	'PasswordHasUsername'     => 'Tu contraseña no puede contener tu nombre de usuario.',
	'PasswordTooShort'        => 'Tu contraseña debe tener entre %d y %d caracteres.',
	'PasswordTooLong'         => 'Tu contraseña debe tener entre %d y %d caracteres.',
	'PasswordsDoNotMatch'     => "Las contraseñas no coinciden. Asegúrate de haberlas escrito correctamente.",
	'PasswordNeedUpper'       => 'Tu contraseña debe contener al menos %d letra(s) mayúscula(s).',
	'PasswordNeedLower'       => 'Tu contraseña debe contener al menos %d letra(s) minúscula(s).',
	'PasswordNeedNumber'      => 'Tu contraseña debe contener al menos %d número(s).',
	'PasswordNeedSymbol'      => 'Tu contraseña debe contener al menos %d símbolo(s).',
	'EmailAddressInUse'       => "La dirección de correo electrónico que has introducido ya está registrada por otra cuenta. Utiliza otra dirección de correo electrónico.",
	'InvalidEmailAddress'     => "La dirección de correo electrónico que has introducido no tiene un formato válido.",
	'InvalidGender'           => 'El sexo de la cuenta debe ser "M" o "F"',
	'InvalidServer'           => "El servidor que has seleccionado no existe.",
	'InvalidSecurityCode'     => 'Por favor, introduce correctamente el código de seguridad.',
	'InvalidPassword'         => 'Tu contraseña contiene caracteres no válidos.',
	'InvalidBirthdate'        => 'Has introducido una fecha de cumpleaños no válida.',
	'CriticalRegisterError'   => 'Ha ocurrido algo malo. Contacta con un administrador cuanto antes.',
	// - account/edit
	'AccountEditTitle'        => 'Modifcar Cuenta',
	'AccountEditTitle2'       => 'Modificando Mi Cuenta',
	'AccountEditTitle3'       => 'Modificando Cuenta (%s)',
	'CannotModifyOwnGroupID'  => 'No puedes modificar el ID de grupo de tu cuenta.',
	'CannotModifyAnyGroupID'  => 'No puedes modificar ID de grupo de las cuentas.',
	'CannotModifyGroupIDHigh' => 'No puedes asignar a otra cuenta una ID de grupo mayor que el que tienes.',
	'InvalidGroupID'          => 'ID de grupo no válido.',
	'CannotModifyBalance'     => 'No puedes modificar los balances de las cuentas.',
	'InvalidLastLoginDate'    => 'La última fecha de conexión no es válida.',
	'AccountModified'         => 'Se ha modificado la cuenta.',
	'AccountEditHeading'      => 'Modificar Cuenta',
	'AccountEditButton'       => 'Modificar Cuenta',
	'AccountEditNotFound'     => 'No se ha encontrado la cuenta.',
	// - account/index
	'AccountIndexTitle'       => 'Lista de Cuentas',
	'AccountIndexHeading'     => 'Cuentas',
	'LoginBetweenLabel'       => 'Con Actividad Entre',
	'BirthdateBetweenLabel'   => 'Fecha de Nacimiento Entre',
	'AccountIndexNotFound'    => 'No se ha encontrado la cuenta.',
	// - account/login
	'LoginTitle'              => 'Iniciar Sesión',
	'LoginHeading'            => 'Iniciar Sesión',
	'LoginButton'             => 'Acceder',
	'LoginPageMakeAccount'    => '¿Aún no tienes una cuenta? <a href="%s">¡Hazte una!</a>',
	'TemporarilyBanned'       => 'Tu cuenta se encuentra expulsada temporalmente.',
	'PermanentlyBanned'       => 'Tu cuenta se encuentra expulsada permanentemente.',
	'IpBanned'                => 'La dirección IP desde la que te encuentras tiene el acceso prohibido.',
	'PendingConfirmation'     => 'Tu cuenta está pendiente de la confirmación del correo electrónico.',
	// - account/logout
	'LogoutTitle'             => 'Cerrar Sesión',
	'LogoutHeading'           => 'Cerrar Sesión',
	'LogoutInfo'              => 'Has cerrado tu sesión.',
	'LogoutInfo2'             => 'Por favor, espera un momento mientras te <a href="%s">redireccionamos</a>…',
	// - account/resend
	'ResendTitle'             => 'Volver a Enviar Correo Electrónico de Confirmación',
	'ResendEnterUsername'     => 'Introduce el nombre de usuario de tu cuenta.',
	'ResendEnterEmail'        => 'Introduce tu dirección de correo electrónico.',
	'ResendFailed'            => 'No se pudo volver a enviar el código de confirmación.',
	'ResendEmailSent'         => 'Se ha vuelto a enviar tu código de confirmación. Por favor, comprueba tu correo electrónico para proceder a activar tu cuenta.',
	'ResendHeading'           => 'Volver a Enviar Correo Electrónico de Confirmación',
	'ResendInfo'              => 'Introduce el nombre de cuenta y la dirección de correo electrónico que has usado durante el registro para poder volver a enviarte tu correo electrónico de confirmación.',
	'ResendServerLabel'       => 'Servidor del Registro',
	'ResendAccountLabel'      => 'Nombre de Usuario de la Cuenta',
	'ResendEmailLabel'        => 'Dirección de Correo Electrónico',
	'ResendServerInfo'        => 'Se trata del servidor en el que has registrado la cuenta.',
	'ResendAccountInfo'       => 'Se trata del nombre de cuenta que has registrado.',
	'ResendEmailInfo'         => 'Se trata de la dirección de correo electrónico que usaste cuando registraste la cuenta del campo anterior.',
	'ResendButton'            => 'Volver a Enviar Correo Electrónico de Confirmación',
	// - account/resetpass
	'ResetPassTitle'          => 'Recuperar Contraseña',
	'ResetPassEnterAccount'   => 'Introduce el nombre de usuario de tu cuenta.',
	'ResetPassEnterEmail'     => 'Introduce tu dirección de correo electrónico.',
	'ResetPassDisallowed'     => 'No se puede hacer uso de la recuperación de contraseña para esta cuenta.',
	'ResetPassFailed'         => 'No se pudo enviar el correo electrónico para recuperar tu contraseña.',
	'ResetPassEmailSent'      => 'Se ha enviado un correo electrónico con detalles para recuperar tu contraseña.',
	'ResetPassTitle'          => 'Recuperar Contraseña',
	'ResetPassInfo'           => 'Si has perdido tu contraseña, puedes recuperarla introduciendo la dirección de correo electrónico que utilizaste para registrar tu cuenta.',
	'ResetPassInfo2'          => 'Entonces, se enviará un correo electrónico a la dirección especificada con un enlace que te permitirá recuperar tu contraseña, por lo que se requiere una dirección de correo electrónico válida.',
	'ResetPassServerLabel'    => 'Servidor del Registro',
	'ResetPassAccountLabel'   => 'Nombre de Usuario de la Cuenta',
	'ResetPassEmailLabel'     => 'Dirección de Correo Electrónico',
	'ResetPassServerInfo'     => 'Se trata del servidor en el que has registrado la cuenta.',
	'ResetPassAccountInfo'    => 'Se trata del nombre de cuenta que has registrado.',
	'ResetPassEmailInfo'      => 'Se trata de la dirección de correo electrónico que usaste cuando registraste la cuenta del campo anterior.',
	'ResetPassButton'         => 'Enviar Correo Electrónico de Recuperación de Contraseña',
	// - account/resetpw
	'ResetPwTitle'            => 'Recuperar Contraseña',
	'ResetPwFailed'           => 'No se pudo recuperar la contraseña. Inténtalo de nuevo más tarde.',
	'ResetPwDone'             => 'Se ha cambiado tu contraseña y se te ha enviado un correo electrónico con tu nueva contraseña.',
	'ResetPwDone2'            => 'Se ha cambiado tu contraseña, pero no hemos podido enviar el correo electrónico que contiene tu nueva contraseña. Por favor, repite el proceso de recuperar tu contraseña para resolver este problema.',
	// - account/transfer
	'TransferTitle'           => 'Transferir Créditos de Donación',
	'TransferGreaterThanOne'  => 'Solo puedes transferir créditos en cantidades mayores que 1.',
	'TransferEnterCharName'   => 'Debes introducir el nombre del personaje que recibirá los créditos.',
	'TransferNoCharExists'    => "El personaje '%s' no existe. Asegúrate de haberlo escrito correctamente.",
	'TransferNoBalance'       => 'No tienes suficiente saldo para realizar la transferencia.',
	'TransferUnexpectedError' => 'Ha ocurrido un error inesperado.',
	'TransferSuccessful'      => '¡Se han transferido los créditos!',
	'TransferHeading'         => 'Transferir Créditos de Donación',
	'TransferSubHeading'      => 'Se transferirán los créditos a un personaje del servidor %s.',
	'TransferInfo'            => 'Tienes %s crédito(s) en estos instantes.',
	'TransferInfo2'           => 'Introduce la cantidad de créditos que te gustaría transferir y el nombre de un personaje que pertenezca a la cuenta a la que quieras transferir tus créditos.',
	'TransferAmountLabel'     => 'Cantidad de Créditos',
	'TransferCharNameLabel'   => 'Nombre de Personaje',
	'TransferAmountInfo'      => 'Se trata de la cantidad de créditos que deseas transferir.',
	'TransferCharNameInfo'    => 'Se trata del nombre del personaje que recibirá los créditos enviados.',
	'TransferConfirm'         => '¿Estás seguro de que quieres hacer la transferencia?',
	'TransferButton'          => 'Transferir',
	'TransferNoCredits'       => 'No tienes créditos disponibles en tu cuenta.',
	// - account/view
	// * account/view submenus
	'ModifyAccountLink'       => 'Modificar Cuenta',
	'AccountViewTitle'        => 'Ver Cuenta',
	'AccountViewTitle2'       => 'Viendo Cuenta (%s)',
	'AccountViewTitle3'       => 'Viendo Mi Cuenta',
	'AccountTempBanFailed'    => 'No se pudo expulsar temporalmente la cuenta.',
	'AccountPermBanFailed'    => 'No se pudo expulsar permanentemente la cuenta.',
	'AccountTempBanUnauth'    => 'No estás autorizado para expulsar temporalmente a esta cuenta.',
	'AccountPermBanUnauth'    => 'No estás autorizado para expulsar permanentemente a esta cuenta.',
	'AccountLiftTempBan'      => 'Se ha readmitido la cuenta.',
	'AccountLiftPermBan'      => 'Se ha readmitido la cuenta.',
	'AccountLiftBanUnauth'    => "No estás autorizado para readmitir esta cuenta.",
	'AccountViewHeading'      => 'Viendo Cuenta',
	'AccountViewDonateLink'   => '(¡Donar!)',
	'AccountViewTempBanLabel' => 'Expulsar Temporalmente',
	'AccountViewPermBanLabel' => 'Expulsar Permanentemente',
	'AccountViewUnbanLabel'   => 'Readmitir',
	'AccountBanReasonLabel'   => 'Razón:',
	'AccountBanUntilLabel'    => 'Expulsar Hasta:',
	'AccountTempBanButton'    => 'Expulsar Cuenta',
	'AccountPermBanButton'    => 'Expulsar Cuenta Permanentemente',
	'AccountTempUnbanButton'  => 'Deshacer Expulsión Temporal',
	'AccountPermUnbanButton'  => 'Deshacer Expulsión Permanente',
	'AccountBanConfirm'       => '¿Estás seguro?',
	'AccountBanLogSubHeading' => 'Registro de expulsiones de %s (más recientes primero)',
	'BanLogBanTypeLabel'      => 'Tipo de Expulsión',
	'BanLogBanDateLabel'      => 'Fecha de Expulsión',
	'BanLogBanReasonLabel'    => 'Razón de Expulsión',
	'BanLogBannedByLabel'     => 'Expulsado Por',
	'BanLogBannedByCP'        => 'Panel de Control',
	'BanTypeUnbanned'         => 'Sin Expulsión',
	'BanTypePermBanned'       => 'Expulsado Permanentemente',
	'BanTypeTempBanned'       => 'Expulsado Temporalmente',
	'AccountViewCharSubHead'  => 'Personajes en %s',
	'AccountViewSlotLabel'    => 'Slot',
	'AccountViewCharLabel'    => 'Nombre de Personaje',
	'AccountViewClassLabel'   => 'Clase',
	'AccountViewLvlLabel'     => 'Nivel Base',
	'AccountViewJlvlLabel'    => 'Nivel Job',
	'AccountViewZenyLabel'    => 'Zeny',
	'AccountViewGuildLabel'   => 'Guild',
	'AccountViewStatusLabel'  => 'Estado',
	'AccountViewPrefsLabel'   => 'Preferencias',
	'CharModifyPrefsLink'     => 'Modificar Preferencias',
	'AccountViewNoChars'      => 'Esta cuenta no tiene personajes en %s.',
	'AccountViewStorage'      => 'Objetos en el storage de %s',
	'AccountViewStorageCount' => '%s tiene %s objeto(s) en su storage.',
	'AccountViewNoStorage'    => 'No hay objetos en el storage de esta cuenta.',
	'AccountViewNotFound'     => "La cuenta que estás intentando ver no existe.",
	// - account/xferlog
	'XferLogTitle'            => 'Historial de Transferencia de Crédito',
	'XferLogHeading'          => 'Historial de Transferencia de Crédito',
	'XferLogReceivedSubHead'  => 'Transferencias: Recibidas',
	'XferLogSentSubHead'      => 'Transferencias: Enviadas',
	'XferLogCreditsLabel'     => 'Créditos',
	'XferLogFromLabel'        => 'Correo Electrónico Remitente',
	'XferLogDateLabel'        => 'Fecha de Transferencia',
	'XferLogCharNameLabel'    => 'Para el Personaje',
	'XferLogNotReceived'      => 'No has recibido ninguna transferencia de crédito.',
	'XferLogNotSent'          => 'No has hecho ninguna transferencia de crédito.',
	
	// Module: character
	// - character/changeslot
	// - character/index
	// - character/mapstats
	// - character/online
	// - character/prefs
	// - character/resetlook
	'CantResetLookWhenOnline' => 'No se puede restaurar el aspecto de %s mientras está conectado.',
	'ResetLookSuccessful'     => "¡Se ha restaurado el aspecto de %s!",
	'ResetLookFailed'         => "No se pudo restaurar el aspecto de %s.",
	// - character/resetpos
	'CantResetPosWhenOnline'  => 'No se puede restaurar la posición de %s mientras está conectado.',
	'CantResetFromCurrentMap' => "No puedes restaurar la posición de %s en su mapa actual.",
	'ResetPositionSuccessful' => "¡Se ha restaurado la posición de %s!",
	'ResetPositionFailed'     => "No se pudo restaurar la posición de %s.",
	// - character/view
	// - character/divorce
	'DivorceTitle'            => 'Divorciar',
	'DivorceHeading'          => 'Divorciar',
	'DivorceNotMarried'       => '%s no se encuentra casado.',
	'DivorceInvalidPartner'   => 'La ID del cónyuge no es válida.',
	'DivorceInvalidChild'     => 'La ID del hijo no es válida.',
	'DivorceMustBeOffline'    => 'Tanto %s como el cónyuge deben estar desconectados.',
	'DivorceMustBeOffline2'   => '%s, su cónyuge y su hijo deben estar desconectados.',
	'DivorceText1'            => "¿Estás seguro de que deseas el divorcio entre %s y su cónyuge?",
	'DivorceText2'            => 'Si %s tiene un hijo, éste se volverá huérfano.',
	'DivorceText3'            => 'Además, los Wedding rings serán eliminados.',
	'DivorceButton'           => 'Sí, hazlo por favor.',
	'DivorceSuccessful'       => '¡Se ha divorciado a %s!',
	
	// Module: cplog
	// - cplog/index.php
	// - cplog/login.php
	// - cplog/paypal.php
	// - cplog/resetpass.php
	// - cplog/txnview.php
	
	// Module: donate
	// - donate/complete
	// - donate/history
	// - donate/index
	// - donate/trusted
	
	// Module: errors
	// - errors/missing_action
	'MissingActionTitle'      => 'Acción Faltante', // Nociones de Programación Orientada a Objetos: Acción = "Página" 
	'MissingActionHeading'    => 'Acción Faltante!', // Una acción es un conjunto de Vistas, cada elemento de la acción
	'MissingActionModLabel'   => 'Módulo:',
	'MissingActionActLabel'   => 'Acción:',
	'MissingActionReqLabel'   => 'URI de petición:',
	'MissingActionLocLabel'   => 'Localización en el sistema de archivos:',
	// - errors/missing_view
	'MissingViewTitle'        => 'Vista Faltante',
	'MissingViewHeading'      => 'Vista Faltante!',
	'MissingViewModLabel'     => 'Módulo:',
	'MissingViewActLabel'     => 'Acción:',
	'MissingViewReqLabel'     => 'URI de petición:',
	'MissingViewLocLabel'     => 'Localización en el sistema de archivos:',
	
	// Module: guild
	// - guild/export
	// - guild/index
	// - guild/view
	
	// Module: history
	// - history/cplogin
	'HistoryCpLoginTitle'     => 'Accesos al Panel de Control',
	'HistoryCpLoginHeading'   => 'Accesos al Panel de Control',
	'HistoryLoginDateLabel'   => 'Fecha/Hora de Acceso',
	'HistoryIpAddrLabel'      => 'Dirección IP',
	'HistoryErrorCodeLabel'   => 'Código de Error',
	'HistoryNoCpLogins'       => 'No se ha encontrado ningún intento de acceso al panel de control.',
	// -history/emailchange
	'HistoryEmailTitle'       => 'Cambios de Correo Electrónico',
	'HistoryEmailHeading'     => 'Cambios de Correo Electrónico',
	'HistoryEmailRequestDate' => 'Fecha/Hora de la petición',
	'HistoryEmailRequestIp'   => 'IP de la petición',
	'HistoryEmailOldAddress'  => 'Correo Electrónico Antiguo',
	'HistoryEmailNewAddress'  => 'Correo Electrónico Nuevo',
	'HistoryEmailChangeDate'  => 'Fecha del Cambio',
	'HistoryEmailChangeIp'    => 'IP del Cambio',
	'HistoryNoEmailChanges'   => 'No se ha encontrado ningún intento de cambio de correo electrónico.',
	// - history/gamelogin
	'HistoryGameLoginTitle'   => 'Conexiones en el Juego',
	'HistoryGameLoginHeading' => 'Conexiones en el Juego',
	'HistoryRepsCodeLabel'    => 'Código de Respuesta',
	'HistoryLogMessageLabel'  => 'Mensaje en el Registro',
	'HistoryNoGameLogins'     => 'No se ha encontrado ningún intento de conexión en el juego.',
	// - history/index
	'HistoryIndexTitle'       => 'Historial de Mi Cuenta',
	'HistoryIndexHeading'     => 'Historial de Mi Cuenta',
	'HistoryIndexInfo'        => 'Aquí puedes ver la actividad de tu cuenta en el pasado.',
	'HistoryIndexInfo2'       => 'Por favor, selecciona una acción en el menú.',
	// - history/passchange
	'HistoryPassChangeTitle'      => 'Cambios de Contraseña',
	'HistoryPassChangeHeading'    => 'Cambios de Contraseña',
	'HistoryPassChangeChangeDate' => 'Fecha del Cambio',
	'HistoryPassChangeChangeIp'   => 'IP del Cambio',
	'HistoryNoPassChanges'        => 'No se ha encontrado ningún cambio de contraseña.',
	// -history/passreset
	'HistoryPassResetTitle'       => 'Recuperaciones de Contraseña',
	'HistoryPassResetHeading'     => 'Recuperaciones de Contraseña',
	'HistoryPassResetRequestDate' => 'Fecha/Hora de la Petición',
	'HistoryPassResetRequestIp'   => 'IP de la Petición',
	'HistoryPassResetResetDate'   => 'Fecha de la Recuperación',
	'HistoryPassResetResetIp'     => 'IP de la Recuperación',
	'HistoryNoPassResets'         => 'No se ha encontrado ningún intento de recuperar la contraseña.',
	
	// Module: ipban
	// - ipban/add
	'IpbanAddTitle'           => 'Añadir Expulsiones de IP',
	'IpbanEnterIpPattern'     => 'Introduce una dirección o un rango de IP.',
	'IpbanInvalidPattern'     => 'La dirección o el rango de IP introducido no es válido/a.',
	'IpbanWhitelistedPattern' => 'Este rango de IP está en la lista blanca, por lo que no puede ser bloqueado.',
	'IpbanEnterReason'        => 'Introduce una razón para la expulsión.',
	'IpbanSelectUnbanDate'    => 'Se requiere una fecha de readmisión.',
	'IpbanFutureDate'         => 'La fecha de readmisión debe ser una fecha futura.',
	'IpbanAlreadyBanned'      => 'La IP (%s) ya está expulsada.',
	'IpbanPatternBanned'      => "Se ha expulsado la dirección o rango de IP '%s'.",
	'IpbanAddFailed'          => 'No se pudo añadir esta expulsión de IP.',
	'IpbanAddHeading'         => 'Añadir Expulsiones de IP',
	'IpbanIpAddressLabel'     => 'Dirección IP',
	'IpbanReasonLabel'        => 'Razón de la Expulsión',
	'IpbanUnbanDateLabel'     => 'Fecha de Readmisión',
	'IpbanIpAddressInfo'      => 'Puedes especificar un rango de IP, como por ejemplo 218.139.*.*',
	'IpbanAddButton'          => 'Añadir Expulsión de IP',
	// - ipban/edit
	'IpbanEditTitle'          => 'Modificar Expulsiones de IP',
	'IpbanEnterEditReason'    => 'Introduce una razón para la modificación de la expulsión de IP.',
	'IpbanEditFailed'         => 'No se pudo modificar la expulsión de IP.',
	'IpbanEditHeading'        => 'Modifcar Expulsiones de IP',
	'IpbanEditReasonLabel'    => 'Razón de la Edición',
	'IpbanEditButton'         => 'Modifcar Expulsión de IP',
	// - ipban/index
	'IpbanListTitle'          => 'Lista de Expulsiones de IP',
	'IpbanListHeading'        => 'Lista de Expulsiones de IP',
	'IpbanBannedIpLabel'      => 'IP Expulsada',
	'IpbanBanDateLabel'       => 'Fecha de Expulsión',
	'IpbanBanReasonLabel'     => 'Razón de Expulsión',
	'IpbanBanExpireLabel'     => 'Fecha de Expiración',
	'IpbanModifyLink'         => 'Modificar',
	'IpbanRemoveLink'         => 'Eliminar',
	'IpbanUnbanButton'        => 'Readmitir Seleccionados',
	'IpbanListNoBans'         => 'En estos momentos no hay ninguna expulsión de IP.',
	// - ipban/remove
	'IpbanRemoveTitle'        => 'Deshacer Expulsión de IP',
	'IpbanEnterRemoveReason'  => 'Introduce una razón para readmitir esta IP o rango.',
	'IpbanNotBanned'          => 'La IP (%s) no está expulsada.',
	'IpbanPatternUnbanned'    => "Se ha readmitido la IP o rango '%s'.",
	'IpbanRemoveFailed'       => 'No se pudo deshacer la expulsión de IP.',
	'IpbanRemoveHeading'      => 'Deshacer Expulsión de IP',
	'IpbanRemoveReasonLabel'  => 'Razón de Readmisión',
	'IpbanRemoveButton'       => 'Readmitir IP o rango',
	// - ipban/unban
	'IpbanNothingToUnban'     => 'No hay nada que se pueda readmitir.',
	'IpbanEnterUnbanReason'   => 'Introduce un motivo para readmitir esta(s) IP.',
	'IpbanUnbanned'           => '¡Se ha(n) readmitido la(s) IP seleccionada(s)!',
	'IpbanUnbanFailed'        => '¡No se pudo/pudieron readmitir %d IP especificada(s)!',
	
	// Module: item
	// - item/add
	// - item/copy
	// - item/edit
	// - item/index
	// - item/view
	
	// Module: itemshop
	// - itemshop/add
	// - itemshop/delete
	// - itemshop/edit
	// - itemshop/imagedel
	
	// Module: logdata
	// - logdata/chat
	// - logdata/command
	'CommandLogTitle'         => 'Lista de Comandos',
	'CommandLogHeading'       => 'Comandos Registrados',
	'CommandLogNotFound'      => 'No se ha registrado ningún comandos.',
	'CommandLogDateLabel'     => 'Fecha/Hora',
	'CommandLogAccountIdLabel'=> 'ID de Cuenta',
	'CommandLogCharIdLabel'   => 'ID de Personaje',
	'CommandLogCharNameLabel' => 'Nombre del Personaje',
	'CommandLogCommandLabel'  => 'Comando',
	'CommandLogMapLabel'      => 'Mapa',
	// - logdata/index
	// - logdata/login
	// - logdata/pick
	'PickLogTitle'            => 'Lista de Transacciones de Objetos',
	'PickLogHeading'          => 'Transacciones Registradas de Objetos',
	'PickLogNotFound'         => 'No se ha registrado ninguna transacción de objetos.',
	'PickLogDateLabel'        => 'Fecha/Hora',
	'PickLogCharacterLabel'   => 'Personaje',
	'PickLogTypeLabel'        => 'Tipo',
	'PickLogItemLabel'        => 'Nombre de Objeto',
	'PickLogAmountLabel'      => 'Cantidad',
	'PickLogRefineLabel'      => 'Refinado',
	'PickLogCard0Label'       => 'Carta 0',
	'PickLogCard1Label'       => 'Carta 1',
	'PickLogCard2Label'       => 'Carta 2',
	'PickLogCard3Label'       => 'Carta 3',
	'PickLogMapLabel'         => 'Mapa',
	// - logdata/zeny
	'ZenyLogTitle'            => 'Lista de Transacciones de Zeny',
	'ZenyLogHeading'          => 'Transacciones Registradas de Zeny',
	'ZenyLogNotFound'         => 'No se ha registrado ninguna transacción de zeny.',
	'ZenyLogDateLabel'        => 'Fecha/Hora',
	'ZenyLogCharacterLabel'   => 'Personaje',
	'ZenyLogSourceLabel'      => 'ID de Personaje', // No estoy seguro, tomado de la traducción portuguesa de JulioCF
	'ZenyLogTypeLabel'        => 'Tipo',
	'ZenyLogAmountLabel'      => 'Cantidad',
	'ZenyLogMapLabel'         => 'Mapa',
	
	// Module: mail
	// - mail/index
	'MailerTitle'             => 'Enviar Correo Electrónico',
	'MailerHeading'           => 'Enviar Correo Electrónico',
	'MailerEnterToAddress'    => 'Introduce el destinatario.',
	'MailerEnterSubject'      => 'Introduce el asunto.',
	'MailerEnterBodyText'     => 'Introduce el cuerpo del mensaje.',
	'MailerEmailHasBeenSent'  => 'Se ha enviado satisfactoriamente tu correo electrónico a %s.',
	'MailerFailedToSend'      => 'El sistema de envío de correo electrónico no pudo enviar este mensaje. Es posible que esto ocurra debido a un fallo en la configuración.',
	'MailerInfo'              => 'Utiliza el formulario de abajo para enviar un correo electrónico mediante el panel de control.',
	'MailerFromLabel'         => 'De',
	'MailerToLabel'           => 'Para',
	'MailerSubjectLabel'      => 'Asunto',
	'MailerBodyLabel'         => 'Cuerpo del mensaje',
	'MailerBodyInfo'          => 'El mensaje está en sintaxis Markdown.',
	
	// Module: main
	// - main/index
	'MainPageHeading'         => 'Panel de Control Flux',
	'MainPageInfo'            => "Si puedes ver esta página, significa que has instalado Flux correctamente.",
	'MainPageInfo2'           => "¿Quieres cambiar esta página? Muy bien, puedes hacerlo así:",
	'MainPageStep1'           => 'Abre "%s" en un editor de texto.',
	'MainPageStep2'           => 'Edita el archivo desde el propio editor y guarda los cambios.',
	'MainPageThanks'          => '¡Gracias por usar Flux!',
	// - main/pagenotfound
	'PageNotFoundTitle'       => 'Error 404 Página No Encontrada',
	'PageNotFoundHeading'     => 'Página No Encontrada',
	'PageNotFoundInfo'        => 'No se ha encontrado la página que buscas en nuestro servidor. Verifica que la dirección es correcta e inténtalo de nuevo.',
	// - main/preprocess
	'DisallowedDuringWoE'     => 'No se puede acceder a la página que buscas en horario de WoE.',
	
	// Module: monster
	// - monster/index
	// - monster/view
	
	// Module: purchase
	// - purchase/add
	// - purchase/cart
	// - purchase/checkout
	// - purchase/clear
	// - purchase/index
	// - purchase/pending
	// - purchase/remove
	
	// Module: ranking
	// - ranking/character
	// - ranking/guild
	// - ranking/zeny
	
	// Module: server
	// - server/info
	'ServerInfoTitle'         => 'Información del Servidor',
	'ServerInfoHeading'       => 'Información del Servidor',
	'ServerInfoText'          => "Aquí puedes encontrar información varia sobre el servidor.",
	'ServerInfoSubHeading'    => 'Información de %s',
	'ServerInfoSubHeading2'   => 'Información de Clases en %s',
	'ServerInfoAccountLabel'  => 'Cuentas',
	'ServerInfoCharLabel'     => 'Personajes',
	'ServerInfoGuildLabel'    => 'Guilds',
	'ServerInfoPartyLabel'    => 'Parties',
	'ServerInfoZenyLabel'     => 'Zeny',
	// - server/status
	'ServerStatusTitle'       => 'Estado Actual del Servidor',
	'ServerStatusHeading'     => 'Estado del Servidor',
	'ServerStatusInfo'        => "Entender el estado online u offline de cada servidor puede servirte de ayuda para entender cómo un fallo del servidor puede relacionarse con un problema que puedas tener. Por ejemplo, si el login server aparece offline, significa que no podrás conectarte al juego. El character server y el/los map server(s) son necesarios para el juego una vez te has conectado e identificado.",
	'ServerStatusServerLabel' => 'Servidor',
	'ServerStatusLoginLabel'  => 'Login Server',
	'ServerStatusCharLabel'   => 'Character Server',
	'ServerStatusMapLabel'    => 'Map Server',
	'ServerStatusOnlineLabel' => 'Jugadores Conectados',
	'ServerStatusATMerchantsLabel' => 'Comerciantes Autotrade',
	'ServerStatusPopulationLabel' => 'Población',
	
	// Module: service
	// - service/tos
	'TermsTitle'              => 'Términos del Servicio',
	'TermsHeading'            => 'Términos del Servicio',
	'TermsInfo'               => '¡Por favor, léelos atentamente antes de crearte una cuenta!',
	'TermsInfo2'              => "PARA EL ADMINISTRADOR DEL PANEL DE CONTROL:  Puedes añadir los Términos del Servicio de tu servidor directamente en este archivo. Su localización es: %s",
	
	// Module: unauthorized
	// - unauthorized/index
	'UnauthorizedTitle'       => 'No estás autorizado',
	'UnauthorizedHeading'     => 'No estás autorizado',
	'UnauthorizedInfo'        => 'No estás autorizado para ver esta página. <a href="%s">Redireccionando…</a>',
	
	// Module: woe
	// - woe/index
	'WoeTitle'                => 'Horario de WoE',
	'WoeHeading'              => 'Horario de War of Emperium',
	'WoeInfo'                 => "Abajo se encuentra el horario de WoE en %s. Este horario está sujeto a cambios en cualquier momento, pero esperemos que no sea así.",
	'WoeServerTimeInfo'       => 'La hora actual del servidor es:',
	'WoeServerLabel'          => 'Servidores',
	'WoeTimesLabel'           => 'Horarios de War of Emperium',
	'WoeNotScheduledInfo'     => 'No se ha asignado ningún horario para WoE.',
);
?>
