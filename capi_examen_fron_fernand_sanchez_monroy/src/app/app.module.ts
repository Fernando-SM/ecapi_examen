// app.module.ts

import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';

import { AppComponent } from './app.component';
import {UsuariosModule} from "./usuarios/usuarios.module";

@NgModule({
  declarations: [AppComponent],
  imports: [BrowserModule, HttpClientModule, UsuariosModule],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
