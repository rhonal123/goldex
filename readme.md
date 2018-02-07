# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).


npm install ng2-datepicker@2.0.0-dev5




create table detalle_movimiento(
  `id` int(10) UNSIGNED NOT NULL,
  `transferencia_id`  int(10) UNSIGNED NOT NULL,
  `abono_id`  int(10) UNSIGNED NOT NULL, 
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
);

ALTER TABLE `detalle_movimiento`
  ADD CONSTRAINT `detalle_movimiento_transferencia_id_foreign` FOREIGN KEY (`transferencia_id`) REFERENCES `movimientos` (`id`),
  ADD CONSTRAINT `detalle_movimiento_abono_id_foreign` FOREIGN KEY (`abono_id`) REFERENCES `movimientos` (`id`);



CREATE TABLE `configurations` (
  `id` int(10) UNSIGNED NOT NULL,
  `anoTransito` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `anoTransito`, `created_at`, `updated_at`) VALUES
(1, '2018-01-01', '2018-01-27 04:30:00', '2018-01-27 20:05:06');

INSERT INTO `cuentas`(`id`,`numero`,`banco_id`, `saldo`) VALUES ('CAJA CHICA',1,0);

ALTER TABLE detalle_movimiento
ADD COLUMN `destino_id`  int(10) UNSIGNED DEFAULT NULL;

ALTER TABLE `detalle_movimiento`
  ADD CONSTRAINT `detalle_movimiento_transferencia_destino_id_foreign` FOREIGN KEY (`destino_id`) REFERENCES `movimientos` (`id`);
