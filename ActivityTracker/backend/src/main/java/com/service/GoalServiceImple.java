package com.service;


import com.domain.Goal;
import com.repository.GoalRepo;

import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;

@Service
@Transactional
public class GoalServiceImple implements GoalService {
    private GoalRepo goalRepo;


    public GoalServiceImple(GoalRepo goalRepo) {
        this.goalRepo = goalRepo;
    }

    @Transactional
    public Goal insert(Goal goal) {
        goalRepo.create(goal);
        return goal;
    }

    @Transactional(readOnly = true)
    public Goal get(int id) {
        return goalRepo.get(id);
    }

    @Transactional(readOnly = true)
    public List<Goal> getAll() {

        return goalRepo.getAll();
    }

    @Transactional
    public Goal update(Goal goal) {
        return goalRepo.update(goal);
    }

    @Transactional
    public void delete(int id) {
        goalRepo.delete(id);
    }
}
