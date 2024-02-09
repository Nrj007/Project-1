// app-routing.module.ts

import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { PersonalDetailsComponent } from './personal-details/personal-details.component';
import { ApplicationComponent } from './application/application.component';

const routes: Routes = [
  { path: 'personal', component: PersonalDetailsComponent },

  { path: 'application', component: ApplicationComponent },

  { path: '', redirectTo: 'application', pathMatch: 'full' },
  // ... other routes
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
})
export class AppRoutingModule {}
