// usuarios/tabla-usuarios/tabla-usuarios.component.ts

import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-tabla-usuarios',
  templateUrl: './tabla-usuarios.component.html',
  styleUrls: ['./tabla-usuarios.component.css']
})
export class TablaUsuariosComponent implements OnInit {
  usuarios: any[] = [];

  constructor(private http: HttpClient) { }

  ngOnInit() {
    this.http.get<any[]>('https://examen:8890/api/users').subscribe(
      (data) => {
        this.usuarios = data;
        console.log(this.usuarios); // Verificar la respuesta de la API en la consola
      },
      (error) => {
        console.error('Error al obtener los usuarios:', error);
      }
    );
  }
}
