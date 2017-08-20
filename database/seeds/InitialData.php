<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InitialData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert(
            [
                [
                    'name'          => 'All permission',
                    'display_name'  => 'all-permission',
                    'description'   =>  'Todos los permisos CRUD',
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now(),
                ],
                [
                    'name'          => 'Create Permission',
                    'display_name'  => 'create-permission',
                    'description'   => 'Permisos de creacion',
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now(),
                ],
                [
                    'name'          => 'Index Permission',
                    'display_name'  => 'index-permission',
                    'description'   => 'Permisos de accesos a la visualizacion general',
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now(),
                ],
                [
                    'name'          => 'Show Permission',
                    'display_name'  => 'show-permission',
                    'description'   => 'Permisos de visualizacion especifica',
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now(),
                ],
                [
                    'name'          => 'Update Permission',
                    'display_name'  => 'update-permission',
                    'description'   => 'Permisos de Actualizacion',
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now(),
                ],
                [
                    'name'          => 'Delete Permission',
                    'display_name'  => 'delete-permission',
                    'description'   => 'Permisos de Eliminacion',
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now(),
                ]
            ]
        );

        DB::table('roles')->insert(
            [
                [
                    'name'          => 'Super Usuario',
                    'type'          => 'root',
                    'display_name'  => 'root',
                    'description'   =>  'Rol super usuario',
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now(),
                ],
                [
                    'name'          => 'Administrador General',
                    'type'          => 'admin',
                    'display_name'  => 'geneal-admin',
                    'description'   => 'Permisos de creacion',
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now(),
                ],
                [
                    'name'          => 'Invitado',
                    'type'          => 'invited',
                    'display_name'  => 'invited',
                    'description'   => 'rol invitado',
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now(),
                ]
            ]
        );

        DB::table('users')->insert(
            [
                [
                    'rol_id'                => 1,
                    'name'                  => 'Daniel Espinosa',
                    'username'              => 'Mayordan',
                    'email'                 => 'daespinosag@unal.edu.co',
                    'identification_card'   => '105898299',
                    'gender'                => 'M',
                    'profession'            => 'Administrador de sistemas de informacion',
                    'password'              => bcrypt('secret'),
                    'created_at'            => Carbon::now(),
                    'updated_at'            => Carbon::now(),
                ],
                [
                    'rol_id'                => 1,
                    'name'                  => 'Mauricio Giraldo',
                    'username'              => 'magiraldooc',
                    'email'                 => 'magiraldooc@gmail.com',
                    'identification_card'   => '1053805224',
                    'gender'                => 'M',
                    'profession'            => 'Administrador de sistemas de informacion',
                    'password'              => bcrypt('123456'),
                    'created_at'            => Carbon::now(),
                    'updated_at'            => Carbon::now(),
                ]
            ]
        );
    }
}
